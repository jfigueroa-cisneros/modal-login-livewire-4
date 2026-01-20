<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Livewire Components Routes
Route::livewire('/', 'pages::index')->name('home');

Route::get('/validate-email/{user}', [AuthController::class, 'validateEmail'])
    ->name('validate.email')
    ->middleware('signed');

Route::get('/reset-password/{user}', [AuthController::class, 'resetPassword'])
    ->name('reset.password')
    ->middleware('signed');
