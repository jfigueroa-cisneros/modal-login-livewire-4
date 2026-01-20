<?php

use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::app')] class extends Component {
    #[Computed]
    public function carsOnSale()
    {
        return rand(10, 100);
    }

    #[Computed]
    public function carsSold()
    {
        return rand(100, 1000);
    }

    #[Computed]
    public function avgCarPrice()
    {
        return rand(20000, 100000);
    }
};