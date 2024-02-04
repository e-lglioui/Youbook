@extends('layout')
@section('content')
<div class="container">
    <h1>Bienvenue à la bibliothèque de l'école YouBook</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, praesentium voluptatibus saepe sed
        necessitatibus non? Placeat expedita fugit iusto quis voluptatem possimus, Lorem ipsum, dolor sit amet
        consectetur adipisicing elit. Cumque modi animi, dicta praesentium temporibus rerum et error quaerat assumenda
        voluptatibus accusamus doloribus ab totam aperiam odit blanditiis. Laborum incidunt saepe officia rem dicta
        ratione voluptatibus aspernatur possimus, ut mollitia accusamus recusandae voluptate odit quidem sed nam sint
        nihil sapiente distinctio.</p>

    {{-- Slideshow --}}
    <div class="slideshow">
        <img src="{{ asset('img/l1.jpg') }}" alt="Image 1">
    </div>
</div>
@endsection