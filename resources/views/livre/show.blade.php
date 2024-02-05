@extends('layout')

@section('content')
<div class="container">
    <div class="card-deck">
        <div class="card">
            @if (isset($livre['image']))
                <img src="{{ $livre['image'] }}" class="card-img-top" alt="{{ $livre['nom'] }}">
            @endif
            <div class="show">
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
                <a href="{{ route('livre.edit', ['livre' => $livre['id']]) }}" class="btn btn-primary">Modifier</a>
                
                <form method="post" action="{{ route('livre.destroy', ['livre' => $livre['id']]) }}" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
