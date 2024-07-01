@extends('main')

@section('content')
        <div class="row">
            <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Welcome to my blog!</h1>
                <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my latest post</p>
                <hr class="my-4">
                <p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Popular posts</a>
                </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="post py-2">
                    <h3>Post title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nisi repellendus qui deleniti quidem esse eum sapiente. Suscipit neque aliquam quibusdam! Labore perspiciatis aliquam, tenetur sit laudantium officiis quia ipsum!</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                <hr>
                <div class="post py-2">
                    <h3>Post title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nisi repellendus qui deleniti quidem esse eum sapiente. Suscipit neque aliquam quibusdam! Labore perspiciatis aliquam, tenetur sit laudantium officiis quia ipsum!</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                <hr>
                <div class="post py-2">
                    <h3>Post title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nisi repellendus qui deleniti quidem esse eum sapiente. Suscipit neque aliquam quibusdam! Labore perspiciatis aliquam, tenetur sit laudantium officiis quia ipsum!</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                <hr>
                <div class="post py-2">
                    <h3>Post title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nisi repellendus qui deleniti quidem esse eum sapiente. Suscipit neque aliquam quibusdam! Labore perspiciatis aliquam, tenetur sit laudantium officiis quia ipsum!</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Side bar</h2>
            </div>
        </div>
@endsection
