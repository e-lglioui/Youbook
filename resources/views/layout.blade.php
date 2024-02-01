<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- Styles -->
        <link rel="stylesheet"  href="{{url('css/style.css')}}">
    </head>
    <body class="antialiased">
        <div class="relative py-4 px-6">
        <nav class="nav">
            <a href="{{route('home.index')}}"> home </a>
            <a href="{{route('home.about')}}"> about </a>
            <a href="{{route('livre.index')}}"> livre </a>
        </nav> 
            </div>  
    @yield('content')
    </body>
</html>
