@extends('layout')
@section('content')
<h1>les livres disponibles</h1>
<div class="container">
        <div class="card-deck">
        <h1>Ajouter des livres</h1>
        <div class="w-full max-w-xs">
        <form method="post" action="{{route('livre.store')}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf 

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">
            Nom
        </label>
        <input name="nom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom" type="text" placeholder="Nom">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="auteur">
            Auteur
        </label>
        <input name="auteur" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="auteur" type="text" placeholder="Auteur">
    </div>

    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Enregistrer
        </button>
    </div>
</form>

</div>
        </div>
    </div>
@endsection