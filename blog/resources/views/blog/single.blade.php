@extends('main')

@section('title', "| $post->title")

@section('content')

    <div class="row">
        <div class="col-md-12 text-center mb-2">
            <h1>{{ $post->title }}</h1>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md--2 ">
            <p>{{ $post->body }}</p>
        </div>
    </div>

@endsection