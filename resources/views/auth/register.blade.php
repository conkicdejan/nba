@extends('layouts.api')

@section('title', 'Registration')

@section('content')

    <h3>Registration</h3>

    <form action="/register" method="post">
        @csrf

        <div class="form-group mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" required class="form-control" id="name" name="name" value={{old('name')}}>
            @include('includes.error-messages', ['field' => 'name'])
        </div>

        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" required class="form-control" id="email" name="email" value={{old('email')}}>
            @include('includes.error-messages', ['field' => 'email'])
        </div>

        <div class="form-group mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" required class="form-control" id="password" name="password">
            @include('includes.error-messages', ['field' => 'password'])
        </div>

        <div class="form-group mb-3">
            <label for="password_confirmation" required class="form-label">Confirm password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>

        <button class="btn btn-primary form-group" type="submit">Register</button>

    </form>


@endsection