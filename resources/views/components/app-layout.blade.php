<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @isset($title)
                {{ $title }} / Laravel 11
            @else
                Laravel 11
            @endisset
        </title>
    </head>
    <body>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/gallery">Gallery</a></li>
        </ul>

        {{ $slot }}
    </body>
</html>