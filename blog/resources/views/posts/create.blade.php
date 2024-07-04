@extends('main')

@section('title', '| Create New Post')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Post</h1>
                <hr>
                {{ html()->modelForm('POST')->route('posts.store')->open() }}

                    {{ html()->label('Title:', 'title') }}
                    {{ html()->text('title')->attribute('class', 'form-control') }}

                    {{ html()->label('Content:', 'body') }}
                    {{ html()->textarea('body')->attribute('class', 'form-control') }}

                    {{ html()->submit('Create Post')->attribute('class', 'btn btn-success btn-lg btn-block mt-4')}}
                {{ html()->closeModelForm() }}
            </div>
        </div>

@endsection
