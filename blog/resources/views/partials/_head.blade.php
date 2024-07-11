
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel Blog @yield('title')</title>
<!-- Other meta tags -->

<!-- Include Bootstrap CSS from CDN for quick testing -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<!-- Include compiled CSS -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@yield('stylesheets')