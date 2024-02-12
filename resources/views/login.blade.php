@extends('layout')
@section('content')
<div class="login-body">
<div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login.stor') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>
</div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus impedit perspiciatis numquam aliquid possimus provident nostrum nulla beatae illum. Sapiente.
    @endsection