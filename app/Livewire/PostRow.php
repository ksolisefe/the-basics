<?php

namespace App\Livewire;

use Livewire\Component;

class PostRow extends Component
{
    public $post;
    
    // With the above, mount is not neccesary to call
    // if we're only using it to pass $post
    // public function mount($post)
    // {
    //     $this->post = $post;
    // }

    public function archive()
    {
        $this->post->archive();
    }
    
    public function render()
    {
        return view('livewire.post-row');
    }
}
