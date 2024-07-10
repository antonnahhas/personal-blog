@extends('main')

@section('title', '| All Tags')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Tags:</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tags as $tag)
                    <tr>
                        <th>{{ $tag->id }}</th>
                        <td>{{ $tag->name }}</td>
                        <td>
                            {!! html()->modelForm($tag, 'DELETE', route('tags.destroy', $tag->id))->open() !!}
                                {{ html()->submit('X')->attribute('class', 'btn btn-danger')}}
                            {!! html()->closeModelForm() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
        <div class="card bg-light mt-4">
                <div class="card-body">
                    {{ html()->modelForm('POST')->route('tags.store')->open() }}
                    <h2>New Tags:</h2>
                        {{ html()->label('Name:', 'name') }}
                        {{ html()->text('name')->attribute('class', 'form-control') }}

                        {{ html()->submit('Create New Tag')->attribute('class', 'btn btn-success btn-lg btn-block mt-4')}}
                    {{ html()->closeModelForm() }}
                </div>
            </div>
        </div>
    </div>

@endsection