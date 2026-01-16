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
            'password' => 'required|string|min:8',
        ];
    }

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->reset(['email', 'password']);

            session()->regenerate();

            session()->flash('success', 'Login successful!');

            $this->redirect('/');
        } else {
            $this->addError('password', 'The provided credentials do not match our records.');
        }
    }
};