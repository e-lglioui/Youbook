@extends('layout')
@section('content')
<div class="login-body">
<div class="login-container">
        <h2>Registration</h2>
        <form method="POST" action="{{ route('register.stor') }}">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Register</button>
            </div>
        </form>
    </div>
</div>
    @endsection