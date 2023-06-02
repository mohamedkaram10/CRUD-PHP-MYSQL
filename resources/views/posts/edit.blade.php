@extends('layouts.layout')

@section('content')
    <form class="mt-5" action="{{ route('post.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titile</label><br>
            <input class="form-control type="text" name="title" value="{{ $post->title }}" id="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label><br>
            <input class="form-control type="text" name="body" value="{{ $post->body }}" id="body">
        </div>
        <br>
        <button class="btn btn-primary">Updata</button>
    </form>
@endsection
