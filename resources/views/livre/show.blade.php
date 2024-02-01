@extends('layout')
@section('content')
<h1>les livres disponibles</h1>
<div class="container">
        <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                       
                        <h5 class="card-title">{{ $livre['name'] }}</h5>
                    
                        <p class="card-text">Auteur: {{ $livre['auteur'] }}</p>
                    </div>
                </div>
         
        </div>
    </div>
@endsection