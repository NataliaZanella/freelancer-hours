<?php

use App\Livewire\Projects\Show;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Show::class)
        ->assertOk();
});