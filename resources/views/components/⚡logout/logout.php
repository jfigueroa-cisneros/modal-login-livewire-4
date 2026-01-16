<?php

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    public function logout()
    {
        // Auth::logout();
        // session()->invalidate();
        // session()->regenerateToken();
        session()->flash('success', 'You have been logged out successfully.');
        $this->redirect('/');
    }
};