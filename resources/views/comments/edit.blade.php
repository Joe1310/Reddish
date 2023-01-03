@extends('layouts.app')

@section('content')
    <h1>Edit Comment</h1>
    <form method="POST" action="/comments/{{ $comment->id }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Comment</label>
            <input type="text" class="form-control" id="comment" name="comment" value="{{ old('comment', $comment->comment) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Comment</button>
    </form>
@endsection