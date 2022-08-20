<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Quisine') }}</title>

       
        <!-- Styles -->
        @livewireStyles

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
{{--         @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body>
        
        @yield('content')
       

        @livewireScripts
        
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
