@extends('layouts.layout')

@section('content')
    <form class="container mt-5" action="{{ route('post.insert') }}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="title">Titile</label><br>
            <input class="form-control" type="text" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label><br>
            <input class="form-control" type="text" name="body" id="body">
        </div>
        <br>
        <button class="btn btn-primary mt-3">Create</button>
    </form>
@endsection
