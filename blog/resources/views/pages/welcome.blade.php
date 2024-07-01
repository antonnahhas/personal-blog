<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Application</title>
    <!-- Other meta tags -->
    
    <!-- Include Bootstrap CSS from CDN for quick testing -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Include compiled CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand pl-3" href="#">Laravel blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="\about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="\contact">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right pr-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
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
    </div>

    <!-- Include jQuery and Bootstrap JS from CDN for quick testing -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Include compiled JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
