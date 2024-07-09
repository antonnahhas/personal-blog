@extends('main')

@section('title', '| Forgot Password')

@section('content')

    
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Reset Password
                    </h5>
                    <p>Great now that we verified your email, please create a new strong password, save it so you don't have to do this again!</p>
                    <hr>
                    {!! html()->form('POST', route('password.store'))->open() !!}
                        {{ csrf_field() }}

                        {{ html()->hidden('token', $request->route('token')) }}
                        
                        {{ html()->label('Email:', 'email') }}
                        {{ html()->email('email')->class('form-control') }}

                        {{ html()->label('New Password:', 'password') }}
                        {{ html()->password('password')->class('form-control') }}

                        {{ html()->label('Confirm New Password:', 'password_confirmation') }}
                        {{ html()->password('password_confirmation')->class('form-control') }}

                        {{ html()->submit('Reset Password')->attribute('class', 'btn btn-primary btn-block form-spacing-top')}}
                    
                    {!! html()->form()->close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection