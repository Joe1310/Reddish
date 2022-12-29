@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
@section('title', 'Posts Index')
@section('content')
    @auth
    <div class="mx-auto text-center mt-4">
        <a href="/posts/create" class="btn btn-outline-primary">Create Post</a>
    </div>
    @endauth
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
        </li>
        @endforeach
    </ul>
    {{ $posts->links('customPagination')}}
@endsection