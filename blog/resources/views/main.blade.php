<!DOCTYPE html>
<html>
    <head>
        @include('partials._head')
    </head>
    <body>
        @include('partials._nav')
        <div class="container pt-3 main-content">
            @include('partials._messages')

            @yield('content')

        </div>
        @include('partials._footer')

        @include('partials._javascript')
        
        <!-- Include compiled JS -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        @yield('scripts')
    </body>
</html>
