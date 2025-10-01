<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required', message: 'Yo, add a title')]
    #[Rule('min:4', message: 'yo, too short')]
    public $title = '';

    #[Rule('required', message: 'Yo, add a content for your post')]
    public $content = '';

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/posts', navigate: true);
    }
    
    public function render()
    {
        return view('livewire.create-post');
    }
}
