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
        <nav>
            <a href="/" @class(['current' => request()->is('/')])>Todos</a>
            <a href="/counter" @class(['current' => request()->is('counter')])>Counter</a>
        </nav>
        {{ $slot }}
        @livewireScripts
        @fluxScripts
    </body>
</html>
