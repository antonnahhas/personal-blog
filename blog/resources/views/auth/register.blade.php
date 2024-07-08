@extends('main')

@section('title', '| Register')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            {{ html()->form()->open() }}
                {{ csrf_field() }}
                {{ html()->label('Name:', 'name') }}
                {{ html()->text('name')->class('form-control') }}
                
                {{ html()->label('Email:', 'email') }}
                {{ html()->email('email')->class('form-control') }}

                {{ html()->label('Password:', 'password') }}
                {{ html()->password('password')->class('form-control') }}

                {{ html()->label('Confirm Password:', 'password_confirmation') }}
                {{ html()->password('password_confirmation')->class('form-control') }}
                
                {{ html()->submit('Register')->attribute('class', 'btn btn-primary btn-block form-spacing-top')}}
            
            {{ html()->form()->close() }}
        </div>
    </div>
@endsection