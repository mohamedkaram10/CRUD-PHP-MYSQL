@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                <th>{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>
                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Update</a>
                    <a href="{{ route('post.delete', $post->id) }}" class="btn btn-danger">Delete</a>
                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-success">info</a>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
