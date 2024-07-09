@extends('main')

@section('title', '| Login')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            {!! html()->form()->open() !!}
                {{ csrf_field() }}
                {{ html()->label('Email:', 'email') }}
                {{ html()->email('email')->class('form-control') }}
                
                {{ html()->label('Password:', 'password') }}
                {{ html()->password('password')->class('form-control') }}
                <br>
                {{ html()->label('Remember Me?', 'remember') }}
                {{ html()->checkbox('remember')->class('form-check-label my-2') }}
                <br>
                {{ html()->submit('Login')->attribute('class', 'btn btn-primary btn-block')}}
                <p class="text-center mt-2"><a href="{{ route('password.request') }}">Forgot My Password</a></p>
            
            {!! html()->form()->close() !!}
        </div>
    </div>
@endsection