@extends('layouts.layout')

@section('content')
<div class="card mt-5">
    <div class="card-header text-center">Post Page</div>
        <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Title : {{ $posts->title }}</h5>
        <h5 class="card-text">Body : {{ $posts->body }}</h5>
        </div>
    </hr>
    </div>
</div>
@endsection
