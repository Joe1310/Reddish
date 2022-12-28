@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
          background-image: url('fake reddit.png');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: 0% 100%;
        }
    </style>
</head>
@section('title', 'Post')
@section('content')
    <ul style="list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column;  align-items: center;">
        <li style="margin-bottom: 20px;">
            <div class="post-box2">
            <a>
                <big><b>{{ ucfirst($post->title) }}</b></big>
            </a>
            <br>
            {{ $post->content }}
            <br>
            <br>
            <div class="player-name">
                <b>{{ $post->player->alias }} - {{ ucfirst($post->player->rank) }}<b> 
            </div>
            </div>
        </li>
    </ul>
@endsection