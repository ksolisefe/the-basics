<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        @fluxAppearance
    </head>
    <body>
        @livewireScripts
        @fluxScripts
        <div class="flex flex-row">
            <div class="mr-8 p-3 border-r border-gray-300 min-h-screen h-full">
                <flux:navlist class="w-64">
                    <flux:navlist.item wire:navigate href="/" icon="home" @class(['current' => request()->is('/')])>Todos</flux:navlist.item>
                    <flux:navlist.item wire:navigate href="/counter" @class(['current' => request()->is('counter')])>Counter</flux:navlist.item>
                    <flux:navlist.item wire:navigate href="/posts" @class(['current' => request()->is('posts')])>Posts</flux:navlist.item>
                    <flux:navlist.item wire:navigate href="/posts/create" @class(['current' => request()->is('posts/create')])>Create Post</flux:navlist.item>
                </flux:navlist>
            </div>
            <div class="p-3">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
