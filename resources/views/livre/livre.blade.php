@extends('layout')
@section('content')
    <h1>Les livres disponibles</h1>
    <div class="container">
        <div class="card-deck">
            @foreach ($livre as $livreItem)
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('livre.show', ['livre' => $livreItem['id']]) }}">
                            <h5 class="card-title">{{ $livreItem['nom'] }}</h5>
                        </a>
                        <p class="card-text">Auteur: {{ $livreItem['auteur'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
