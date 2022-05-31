@extends('layouts.api')

@section('title', 'Teams')

@section('content')

    <h3>Teams list</h3>
    <ul>
        @foreach ($teams as $team)
            <li>
                <a href="/teams/{{ $team->id }}">{{ $team->name }}</a>
            </li>    
        @endforeach
    </ul>

@endsection