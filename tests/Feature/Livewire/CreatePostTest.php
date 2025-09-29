<?php

use App\Livewire\CreatePost;
use App\Models\Post;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(CreatePost::class)
        ->assertStatus(200);
});

it('can create new post', function () {
    $post = Post::whereTitle('Some title')->first();

    $this->assertNull($post);

    Livewire::test(CreatePost::class)
        ->set('title', 'Some title')
        ->set('content', 'Some content')
        ->call('save');

    $post = Post::whereTitle('Some title')->first();

    $this->assertNotNull($post);
    $this->assertEquals('Some title', $post->title);
    $this->assertEquals('Some content', $post->content);
});

it('can save new post', function () {
    Livewire::test(CreatePost::class)
        ->set('title', '')
        ->call('save')
        ->assertHasErrors(['title' => 'required']);
});