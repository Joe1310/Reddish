@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form method="POST" action="/posts/{{ $post->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3">{{ old('content', $post->content) }}</textarea>
        </div>
        <div class="form-inputbox">
            <label for="picture">Picture</label>
            <input type="file" id="picture" name="picture">
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
@endsection