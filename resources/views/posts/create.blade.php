@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
@section('title','Create a New Post')
@section('content')
    <h1>Create a New Post</h1>
    <form method="POST" action="/posts" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="player_id" value="{{ Auth::id() }}">
        <div class="form-inputbox">
            <label for="title">Title</label>
            <textarea type="form-control" class="form-control" id="title" name="title" cols="100" placeholder="Enter title"></textarea>
        </div>
        <div class="form-inputbox">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" cols="100" rows="5" placeholder="Enter content"></textarea>
        </div>
        <div class="form-inputbox">
            <label for="picture">Picture</label>
            <input type="file" id="picture" name="picture">
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
@endsection
