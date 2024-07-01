<!DOCTYPE html>
<html>
    <head>
        @include('partials._head')
    </head>
    <body>
        @include('partials._nav')
        <div class="container pt-3">

            @yield('content')

            @include('partials._footer')
        </div>

        @include('partials._javascript')
        
        <!-- Include compiled JS -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>