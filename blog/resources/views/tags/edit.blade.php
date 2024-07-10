@extends('main')

@section('title', '| Edit Tag')

@section('content')
    <div class="row">
        <div class="col-md-8">
                <div class="card bg-light mt-4">
                    <div class="card-body">
                        {!! html()->modelForm($tag, 'PUT', route('tags.update', $tag->id))->open() !!}
                            <h2>Update Tag:</h2>
                            <h5>Current Tag Name: "{{ $tag->name }}"</h5>
                            {{ html()->label('Name:', 'name') }}
                            {{ html()->text('name')->attribute('class', 'form-control') }}

                            {{ html()->submit('Save Changes')->attribute('class', 'btn btn-success btn-lg btn-block mt-4')}}
                        {{ html()->closeModelForm() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection