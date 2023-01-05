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
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('players.show', $player->id) }}">Posts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('players.comments', $player->id) }}">Comments</a>
        </li>
    </ul>
    <ul style="list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column;  align-items: center;">
        @foreach ($comments as $comment)
            <div class="content-box">
                <li style="margin-bottom: 20px;">
                    <p>{{$player->alias}} commented on </p>
                    <div class="post-box-small" onclick="window.location.href='/posts/{{ $comment->post->id }}'">
                    <big><b>{{ ucfirst($comment->post->title) }}</b></big>
                    <br>
                    <div class="player-name">
                        <b>{{ $comment->post->player->alias }} - {{ ucfirst($comment->post->player->rank) }}</b> 
                    </div>
                    </div>
                    <p>{{ $comment->comment }}</p>
                </li>
            </div>
            <div style="text-align: left; display: flex; flex-direction: row;">
                @if (Auth::check())
                    @if (Auth::user()->id === $comment->player_id || Auth::user()->isAdmin())
                    <form method="POST" action="/comments/{{ $comment->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{route('comments.edit', $comment->id)}}" class="btn btn-primary" style="margin-left: 10px;">Edit</a>
                    @endif
                @endif
            </div>
        @endforeach
    </ul>
    {{ $comments->links('customPagination')}}
@endsection