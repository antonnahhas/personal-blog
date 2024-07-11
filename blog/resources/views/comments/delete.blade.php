@extends('main')

@section('title', '| Delete Comment')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>DELETE THIS COMMENT?</h1>
            <p>
                <strong>Name: </strong> {{ $comment->name }}<br>
                <strong>Email: </strong> {{ $comment->email }}<br>
                <strong>Comment: </strong> {{ $comment->comment }}
            </p>

            {!! html()->modelForm($comment, 'DELETE', route('comments.destroy', $comment->id))->open() !!}
                {{ html()->submit('YES DELETE THIS COMMENT')->attribute('class', 'btn btn-danger btn-block')}}
            {!! html()->closeModelForm() !!}
        </div>
    </div>

@endsection