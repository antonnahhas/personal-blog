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
    
    <div class="row">
        <div class="col-md-8 offset-md-2 ">
            <p>{{ $post->body }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2 text-secondary">
            <p>Category: {{ $post->category->name }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-2 mt-5"id="comment-form">
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
                        {{ html()->textarea('comment')->attribute('class', 'form-control')->attribute('rows', '5') }}
                    </div>
                </div>
                    {{ html()->submit('Add Comment')->attribute('class', 'btn btn-success btn-block mt-4')}}
            {{ html()->closeModelForm() }}
        </div>
    </div>


@endsection