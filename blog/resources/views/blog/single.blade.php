@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2 text-center mb-2">
            <h1>{{ $post->title }}</h1>
            <hr>
        </div>
    </div>
    @if ($post->image != "")
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center mb-2">
                <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" height="400" width="800">
            </div>
        </div>
    @endif
    
    <div class="row">
        <div class="col-md-8 offset-md-2 ">
            <p>{!! $post->body !!}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-2 mb-2">
            <div class="tags">
                @foreach($post->tags as $tag)
                    <span class="badge badge-secondary">{{ $tag->name }}</span>
                @endforeach
            </div>
        </div>
    </div>
    

    <div class="row">
        <div class="col-md-8 offset-md-2 text-secondary">
            <p>Category: {{ $post->category->name }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-2 text-secondary">
            <p>Author: {{ $post->user->name }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-2 mt-5"id="comment-form">
            <h4>Add a Comment:</h4>
            {{ html()->modelForm('POST')->route('comments.store', $post->id)->open() }}
                <div class="row">
                    <div class="col-md-6">
                        {{ html()->label('Name:', 'name') }}
                        {{ html()->text('name')->attribute('class', 'form-control') }}
                    </div>
                    <div class="col-md-6">
                        {{ html()->label('Email:', 'email') }}
                        {{ html()->text('email')->attribute('class', 'form-control') }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{ html()->label('Comment:', 'comment') }}
                        {{ html()->textarea('comment')->attribute('class', 'form-control') }}
                    </div>
                </div>
                    {{ html()->submit('Add Comment')->attribute('class', 'btn btn-success btn-block mt-4')}}
            {{ html()->closeModelForm() }}
        </div>

        <hr class="mt-5">
        
        <div class="row mt-4">
            <div class="col-md-8 offset-md-2 card">
                <h2 class="comments-title">Comments Section</h2>
                @foreach($comments as $comment)
                    <div class="comment">
                        <div class="author-info">
                            <img src='{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=wavatar" }}' class="author-image">
                            <div class="author-name">
                                <h4>{{ $comment->name }}</h4>
                                <p class="author-time">{{ date('F nS, Y - g:i A', strtotime($comment->created_at)) }}</p>
                            </div>
                        </div>
                        <div class="comment-content">
                            {{ $comment->comment }}
                        </div> 
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>


@endsection