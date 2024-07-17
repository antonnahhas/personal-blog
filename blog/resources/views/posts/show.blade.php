@extends('main')

@section('title', '| View Post')

@section('content')
    @php
        $isOwner = Auth::user()->id == $post->user_id;
    @endphp
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>

            @if ($post->image != "")
                <div class="row">
                    <div class="col-md-8 mb-2">
                        <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" height="400" width="800">
                    </div>
                </div>
            @endif

            <p class="lead">{!! $post->body !!}</p>
            <hr>

            <div class="tags">
                @foreach($post->tags as $tag)
                    <span class="badge badge-secondary">{{ $tag->name }}</span>
                @endforeach
            </div>
            <div id="backend-comments" class="mt-5">
                <h3>Comments: </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td>{{ $comment->comment }}</td>
                            <td>
                                <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-light btn-sm btn-default">Edit</a>
                                <a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-light btn-sm btn-default">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light">
                <div class="card-body">
                    <dl>
                        <div class="row">
                            <div class="col-md-6">
                                <dt>URL:</dt>
                            </div>
                            <div class="col-md-6">
                                <dd><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></dd>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <dt>Author:</dt>
                            </div>
                            <div class="col-md-6">
                                <dd>{{ $post->user->name }}</dd>
                            </div>
                        </div>
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
                        <div class="row">
                            <div class="col-md-6">
                                <dt>Category:</dt>
                            </div>
                            <div class="col-md-6">
                                <dd>{{ $post->category->name }}</dd>
                            </div>
                        </div>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            {{ Html()->a(route('posts.edit', $post->id), 'Edit')->attribute('class', 'btn btn-primary btn-block ' . ($isOwner ? '' : 'disabled')) }}
                        </div>
                        <div class="col-md-6">
                            {!! html()->modelForm($post, 'DELETE', route('posts.destroy', $post->id))->open() !!}
                                {{ html()->submit('Delete')->attribute('class', 'btn btn-danger btn-block ' . ($isOwner ? '' : 'disabled')) }}
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