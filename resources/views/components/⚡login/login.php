<?php

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    public $email;
    public $password;

    public function rules()
    {
        return [
            'email' => 'required|string|email|max:255|exists:users,email',
            'password' => 'required|string',
        ];
    }

    public function login()
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->addError('password', 'The provided credentials do not match our records.');
            return;
        }

        $user = Auth::user();

        if ($user->email_verified_at === null) {
            Auth::logout();
            $this->addError('email', 'Please verify your email before logging in.');
            return;
        }

        $this->reset(['email', 'password']);

        session()->regenerate();

        session()->flash('success', 'Login successful!');

        $this->redirect('/');
    }
};