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
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/livre.css') }}">


</head>

<body class="antialiased">
    <div class="relative py-4 px-6">
        <nav class="navbar">
            <div class="container mx-auto flex justify-between items-center py-4">

<div class="flex items-center space-x-4">
    <a href="{{ route('home.index') }}" class="text-2xl font-bold text-gray-800">Library</a>
    <a href="{{ route('livre.index') }}" class="text-gray-600 hover:text-gray-800">Livres Disponibles</a>

    @guest
        <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Login</a>
    @else
        @if(Auth::user() instanceof \App\Models\Librarian)
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Logout</button>
                <a href="{{ route('livre.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter</a>
            </form>
        @else
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Logout</button>
            </form>
        @endif
    @endguest
</div>

</div>
      </div>
        </nav>
    </div>
    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>