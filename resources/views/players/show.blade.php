@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
@section('title', 'Player Profile')
<h1 style="align-self: center">{{$player->alias}}'s profile</h1>
@if (Auth::check())
    @if (Auth::user()->id === $player->user_id)
        <div class="d-flex justify-content-center">
            <a href="/players/{{ $player->id }}/edit" class="btn btn-primary">Edit Profile</a>
        </div>
    @endif
@endif
<div class="profile-picture-box">
    <img src="{{ asset('storage/' . $player->profile_picture) }}" alt="{{ $player->alias }}'s profile picture" class="profile-picture">
</div>
@section('content')
    <ul style="list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column;  align-items: center;">
        @foreach ($posts as $post)
        <li style="margin-bottom: 20px;">
            <div class="post-box" onclick="window.location.href='/posts/{{ $post->id }}'">
            <big><b>{{ ucfirst($post->title) }}</b></big>
            <br>
            {{ Str::limit($post->content, 500) }}
            <br>
            <br>
            <div class="player-name">
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
        @endforeach
    </ul>
    {{ $posts->links('customPagination')}}
@endsection