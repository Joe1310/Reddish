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
            @if ($post->picture)
                <img src="{{ asset('storage/' . $post->picture) }}" alt="{{$post->title}}" class="picture">
            @endif
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
                    @if (Auth::user()->id === $post->player_id || Auth::user()->isAdmin())
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
    <ul class="comment-section" style="list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column;  align-items: center;">
        <h5>Comments</h5>
        @foreach ($comments as $comment)
            <li class='comment-box'>
                <div class = 'comment'>
                {{ $comment->comment }}
                <br>
                <div style="cursor: pointer" onclick="window.location.href='/players/{{ $comment->player->id }}'">
                    <b>{{ $comment->player->alias }} - {{ ucfirst($comment->player->rank) }}</b>
                </div>
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
            </li>
        @endforeach
    </ul>
    @if (Auth::check())
        <form id="comment-form">
            @csrf
            <textarea name="comment" cols="72"></textarea>
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <input type="hidden" name="player_id" value="{{ auth()->user()->player->id }}">
            <button type="submit">Submit</button>
        </form>
    @endif
    
    <script>
        $(document).ready(function() {
            $('#comment-form').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '/comments',
                    data: $(this).serialize(),
                    success: function(response) {
                        var newComment = response['comment'];
                        var commentID = response['commentID'];
                        var commentor = response['commentor'];
                        var rank = response['rank'];
                        var newCommentElement = document.createElement("li");
                        newCommentElement.classList.add('comment-box');
                        newCommentElement.innerHTML = 
                            "<div class = 'comment'>" + newComment.comment +
                            "<br>" +
                            "<b> " + commentor + "-" + rank + "</b>" +
                            "</div>" +
                            "</div>" +
                            "<div style='text-align: left; display: flex; flex-direction: row;'>" + 
                            "<form method='POST' action='" + window.location.origin + "/comments/"+commentID+"'>"+
                            "<input type='hidden' name='_token' value='s0zwkMiHWJyHX2KlaDkwnlVXx51teOhZsiC10pIt'>" + 
                            "<input type='hidden' name='_method' value='DELETE'>" +
                            "<button type='submit' class='btn btn-danger'>Delete</button>" +
                            "</form>" + 
                            "<a href='" + window.location.origin + "/comments/"+commentID+"/edit' class='btn btn-primary' style='margin-left: 10px;'>Edit</a>" +
                            "</div>";
                        document.querySelector('.comment-section').appendChild(newCommentElement);
                        document.getElementById("comment-form").reset();
                    }
                });
            });
        });
    </script>

@endsection