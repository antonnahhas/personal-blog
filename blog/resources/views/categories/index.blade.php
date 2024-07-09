@extends('main')

@section('title', '| All Categories')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Categories:</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <th>{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
        <div class="card bg-light mt-4">
                <div class="card-body">
                    {{ html()->modelForm('POST')->route('categories.store')->open() }}
                    <h2>New Category:</h2>
                        {{ html()->label('Name:', 'name') }}
                        {{ html()->text('name')->attribute('class', 'form-control') }}

                        {{ html()->submit('Create New Category')->attribute('class', 'btn btn-success btn-lg btn-block mt-4')}}
                    {{ html()->closeModelForm() }}
                </div>
            </div>
        </div>
    </div>
@endsection