@extends('layout')

@section('content')
<div class="container">
    <div class="card-deck">
        <div class="card">
            @if (isset($livre['image']))
                <img src="{{ $livre['image'] }}" class="card-img-top" alt="{{ $livre['nom'] }}">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $livre['nom'] }}</h5>
                <p class="card-text">Auteur: {{ $livre['auteur'] }}</p>
                <p class="card-text">Quantité: {{ $livre['quantite'] }}</p>
                <p class="card-text">
                    @if ($livre['disonible'])
                        Disponible
                    @else
                        Non disponible
                    @endif
                </p>
                <p class="card-text">Résumé: {{ $livre['resume'] }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
