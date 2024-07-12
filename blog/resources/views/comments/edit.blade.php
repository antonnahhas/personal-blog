@extends('main')

@section('title', '| Edit Comment')

@section('content')
    
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="mb-2">Edit Comment</h1>
            {!! html()->modelForm($comment, 'PUT', route('comments.update', $comment->id))->open() !!}
                <div class="row">
                    <div class="col-md-6">
                        {{ html()->label('Name:', 'name') }}
                        {{ html()->text('name')->attribute('class', 'form-control')->attribute('disabled', 'disabled') }}
                    </div>
                    <div class="col-md-6">
                        {{ html()->label('Email:', 'email') }}
                        {{ html()->text('email')->attribute('class', 'form-control')->attribute('disabled', 'disabled') }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{ html()->label('Comment:', 'comment')->attribute('class', 'mt-4') }}
                        {{ html()->textarea('comment')->attribute('class', 'form-control') }}
                    </div>
                </div>

                {{ html()->submit('Update Comment')->attribute('class', 'btn btn-success btn-block mt-4')}}
            {!! html()->closeModelForm() !!}
        </div>
    </div>
    
@endsection