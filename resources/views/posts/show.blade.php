@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
@section('title', 'Post')
@section('content')
    <ul style="list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column;  align-items: center;">
        <li style="margin-bottom: 20px;">
            <div class="post-box2">
            <big><b>{{ ucfirst($post->title) }}</b></big>
            <br>
            {{ $post->content }}
            <br>
            <br>
            <div class="player-name" style="cursor: pointer" onclick="window.location.href='/players/{{ $post->player->id }}'">
                <b>{{ $post->player->alias }} - {{ ucfirst($post->player->rank) }}</b>
            </div>
            </div>
            <div style="text-align: left; display: flex; flex-direction: row;">
                @if (Auth::check())
                    @if (Auth::user()->id === $post->player_id)
                    <form method="POST" action="/posts/{{ $post->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary" style="margin-left: 10px;">Edit</a>
                    @endif
                @endif
            </div>
        </li>
    </ul>
@endsection