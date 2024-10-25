<?php

use App\Livewire\Projects\Proposals;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Proposals::class)
        ->assertStatus(200);
});
