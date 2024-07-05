@extends('main')

@section('title', '| View Post')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>
        </div>
        <div class="col-md-4">
            <div class="card bg-light">
                <div class="card-body">
                    <dl>
                        <div class="row">
                            <div class="col-md-6">
                                <dt>Created at:</dt>
                            </div>
                            <div class="col-md-6">
                                <dd>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <dt>Last updated:</dt>
                            </div>
                            <div class="col-md-6">
                                <dd>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</dd>
                            </div>
                        </div>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            {{ Html()->a(route('posts.edit', $post->id), 'Edit')->attribute('class', 'btn btn-primary btn-block') }}
                        </div>
                        <div class="col-md-6">
                            {!! html()->modelForm($post, 'DELETE', route('posts.destroy', $post->id))->open() !!}
                                {{ html()->submit('Delete')->attribute('class', 'btn btn-danger btn-block')}}
                            {!! html()->closeModelForm() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{ Html()->a(route('posts.index'), 'See All Posts')->attribute('class', 'btn btn-default btn-light btn-block btn-h1-spacing') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection