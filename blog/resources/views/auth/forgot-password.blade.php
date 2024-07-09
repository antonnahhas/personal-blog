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
                    <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                    <hr>
                    {!! html()->form('POST', route('password.email'))->open() !!}
                        {{ csrf_field() }}
                        
                        {{ html()->label('Email:', 'email') }}
                        {{ html()->email('email')->class('form-control') }}

                        {{ html()->submit('Reset Password')->attribute('class', 'btn btn-primary btn-block form-spacing-top')}}
                    
                    {!! html()->form()->close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection