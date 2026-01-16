<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

// Livewire Components Routes
Route::livewire('/', 'pages::index')->name('home');

Route::get('/validate-email/{user}', function (User $user) {
    // Logic to validate the user's email
    $user->email_verified_at = now();
    $user->save();

    return redirect('/')->with('success', 'Email validated successfully!');
})->name('validate.email')->middleware('signed');
