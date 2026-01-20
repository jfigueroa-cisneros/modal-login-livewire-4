<?php

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPassword;

new class extends Component {
    public $email;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function sendMailForgotPassword()
    {
        $this->validate();

        $user = User::where('email', $this->email)->first();

        if ($user === null) {
            $this->addError('email', 'No user found with this email address.');
            return;
        }

        Mail::to($user->email)->send(new ForgotPassword($user));

        session()->flash('success', 'Password reset link sent to your email.');

        $this->reset('email');

        $this->redirect('/');
    }
};