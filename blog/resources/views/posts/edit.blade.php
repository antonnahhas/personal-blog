@extends('main')

@section('title', '| Edit Blog Post')

@section('content')
<div class="row">
        <div class="col-md-8">
            {!! html()->modelForm($post, 'PUT', route('posts.update', $post->id))->open() !!}
            
            {{ html()->label('Title:', 'title') }}
            {{ html()->text('title')->attribute('class', 'form-control') }}
            
            {{ html()->label('Content:', 'body')->attribute('class', 'form-spacing-top') }}
            {{ html()->textarea('body')->attribute('class', 'form-control') }}
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
                            {!! Html()->a(route('posts.show', $post->id), 'Cancel')->attribute('class', 'btn btn-danger btn-block') !!}
                        </div>
                        <div class="col-md-6">
                        {{ html()->submit('Save Changes')->attribute('class', 'btn btn-success btn-block')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! html()->closeModelForm() !!}
    </div>
@endsection