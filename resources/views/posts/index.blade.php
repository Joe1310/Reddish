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
            @if ($post->picture)
                <img src="{{ asset('storage/' . $post->picture) }}" alt="{{$post->title}}" class="picture">
            @endif
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
                    @if (Auth::user()->id === $post->player_id || Auth::user()->isAdmin())
                    <form method="POST" action="/posts/{{ $post->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary" style="margin-left: 10px;">Edit</a>
                    @endif
                @endif
            </div>
        </li>
        @endforeach
    </ul>
    {{ $posts->links('customPagination')}}
@endsection