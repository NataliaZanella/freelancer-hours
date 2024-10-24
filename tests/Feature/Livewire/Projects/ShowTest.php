<?php

use App\Livewire\Projects\Sho;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Sho::class)
        ->assertStatus(200);
});
