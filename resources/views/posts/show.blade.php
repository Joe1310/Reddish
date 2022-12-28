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
        </li>
    </ul>
@endsection