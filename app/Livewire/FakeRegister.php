<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Fake Register')]
class FakeRegister extends Component
{
    public function render()
    {
        return view('livewire.fake-register');
    }
}
