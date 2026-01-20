<?php

use Livewire\Component;

new class extends Component {
    public $password;
    public $password_confirmation;

    protected $rules = [
        'password' => 'required|min:8|confirmed',
    ];

    public function resetPassword()
    {
        $this->validate();

        $user = session('resetPasswordUser');

        if ($user === null) {
            $this->addError('password', 'Invalid password reset request.');
            return;
        }

        $user->password = bcrypt($this->password);
        $user->save();

        session()->flash('success', 'Password reset successfully! You can now log in.');

        $this->reset(['password', 'password_confirmation']);

        session()->flash('openLoginModal', true);

        $this->redirect('/');
    }
};