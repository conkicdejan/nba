@extends('layouts.api')

@section('title', 'Registration')

@section('content')

    <h3>Login</h3>

    <form action="/login" method="post">
        @csrf

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

        <button class="btn btn-primary form-group" type="submit">Login</button>

    </form>


@endsection