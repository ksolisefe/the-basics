<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\ShowPosts;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;
use App\Livewire\EditProfile;

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
Route::get('/posts', ShowPosts::class);
Route::get('/posts/create', CreatePost::class);
Route::get('/edit-profile', EditProfile::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
