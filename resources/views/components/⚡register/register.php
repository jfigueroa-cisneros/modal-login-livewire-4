<?php

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ValidateEmail;

new class extends Component {
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        Mail::to($user->email)->send(new ValidateEmail($user));

        $this->reset(['name', 'email', 'password', 'password_confirmation']);

        session()->flash('message', 'Registration successful! You can now log in.');

        $this->redirect('/');
    }
};