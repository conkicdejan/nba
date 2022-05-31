@extends('layouts.api')

@section('title', "{{ $player->first_name }}")

@section('content')

    <h3>Player name: {{ $player->first_name }}</h3>
    <p>Player email: {{ $player->email }}</p>
    <a href="/teams/{{ $player->team->id }}">Team: {{ $player->team->name }}</a>

@endsection