
@extends('layout')

@section('content')
    <div class="container">
        <h1>Faire une réservation</h1>
        <form method="post" action="{{ route('reservation.store') }}">
            @csrf

            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="date_reservation">Date de réservation :</label>
                <input type="date" name="date_reservation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Réserver</button>
        </form>
    </div>
@endsection
