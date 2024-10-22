<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'IR Acústica' }}</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @laravelPWA
        @livewire('notifications')
    </head>
    <body class="">

    <main>
        {{ $slot }}
    </main>



    </body>

</html>
