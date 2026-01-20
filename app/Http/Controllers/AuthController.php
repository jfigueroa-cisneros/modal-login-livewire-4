<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function validateEmail(User $user)
    {
        //Check if user is logged in
        if (auth()->check()) {
            return redirect('/')
                ->with('error', 'You are already logged in.')
                ->with('openLoginModal', false);
        }

        //Check if already verified
        if ($user->email_verified_at) {
            return redirect('/')
                ->with('info', 'Email is already validated.')
                ->with('openLoginModal', true);
        }

        $user->email_verified_at = now();
        $user->save();

        return redirect('/')
            ->with('success', 'Email validated successfully!')
            ->with('openLoginModal', true);
    }
}
