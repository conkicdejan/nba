@extends('layouts.api')

@section('title', "{{ $team->name }}")

@section('content')

    <h3>Team name: {{ $team->name }}</h3>
    <hr/>
    <h4>Players list:</h4>
    <ul>
        @foreach ($team->players as $player)
            <li>
                <a href="/player/{{ $player->id }}">{{ $player->first_name }} {{ $player->last_name }}</a>
            </li>    
        @endforeach
    </ul>

    <h5>Comments:</h5>
    <ul class='list-group'>
        
        @foreach ($team->comments as $comment)
            <li class='list-group-item'>
                Author: {{ $comment->user->name }}
                <hr/>
                <p>{{ $comment->content }}</p>
            </li>    
        @endforeach
    </ul>
    @auth
        <form action="/teams/{{ $team->id }}/comments" method="post">
        @csrf
            <textarea name="comment" id="comment" cols="36" rows="3"></textarea>
            @include('includes.error-messages', ['field' => 'comment'])
            <br/>
            <input type="submit" value="Add comment">
        </form>    

    @endauth
@endsection