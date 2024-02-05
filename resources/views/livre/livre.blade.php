@extends('layout')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Les livres disponibles</h1>
    <div class="card-deck">
        @foreach ($livre as $livreItem)
        <div class="card mb-4">
            <div class="card-body">
                @if (isset($livreItem['image']))
                <img src="{{ $livreItem['image'] }}" class="card-img-top imgcard" alt="{{ $livreItem['nom'] }}">
                @endif
                <a href="{{ route('livre.show', ['livre' => $livreItem['id']]) }}" class="text-decoration-none">
                    <h5 class="card-title">{{ $livreItem['nom'] }}</h5>
                </a>
                <p class="card-text">Auteur: {{ $livreItem['auteur'] }}</p>
                @if ($livreItem['disonible'])
                <span class="badge badge-success">Disponible</span>
                @else
                <span class="badge badge-danger">Non disponible</span>
                @endif
                <button class="btn btn-blue">
                    <a href="{{ route('reservationcreate')}}" class="btn btn-primary">Reserver</a>
                </button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection