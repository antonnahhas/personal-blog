@extends('main')

@section('title', '| Homepage')

@section('content')
        <div class="row">
            <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Welcome to my blog!</h1>
                <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my latest post</p>
                <hr class="my-4">
                <p>
                    <a class="btn btn-primary btn-lg" href="{{ route('blog.index') }}" role="button">See All Blogs</a>
                </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h2>Latest Posts</h2>
                @foreach($posts as $post)
                <div class="post py-2">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr(html_entity_decode(strip_tags($post->body)), 0, 300) }}{{ strlen(html_entity_decode(strip_tags($post->body))) > 300 ? "...": "" }}</p>
                    <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read more</a>
                </div>
                <hr>

                @endforeach

            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Side bar</h2>
            </div>
        </div>
@endsection
