@extends('main')

@section('title', '| Blog Posts')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center mb-4">
            <h1>Blogs</h1>
            <hr>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>{{ $post->title }}</h2>
            <h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>
            <p>{{ substr($post->body, 0, 250) }}{{ strlen($post->body) > 50 ? "...": ""}}</p>

            <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary ">Read More</a>
            <hr>
        </div>
    </div>

    @endforeach

    <div class="pagination">
        {!! $posts->links('vendor.pagination.bootstrap-4') !!}
    </div>

@endsection