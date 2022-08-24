<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel 9 with React</title>
        @vite(['resources/css/app.css'])
    </head>
    <body>
        {{-- <div id="welcome"></div> --}}
        @vite(['resources/js/app.js'])
    </body>
</html>
