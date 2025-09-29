<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]
class Todos extends Component
{
    public $todo = '';

    public $todos =  [
        'Take out the trash',
        'Do dishes'
    ];

    // public function updated($property, $value)
    // {
    //     $this->$property = strtoupper($value);
    // }

    public function updatedTodo($value) {
        $this->todo = strtoupper($value);
    }
    
    public function add() {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }
    
    public function render()
    {
        return view('livewire.todos');
    }
}
