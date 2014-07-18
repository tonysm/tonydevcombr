<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield('meta')
    <title>Tony's - @yield('title', 'Home')</title>
    <link rel="stylesheet" href="packages/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    @yield('stylesheets')
</head>
<body>
    @include('layouts._nav')

    <div class="container-fluid">
        @yield('content')
    </div>

    @include('layouts._footer')

    <!-- Latest compiled and minified JavaScript -->
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    @yield('scripts')
</body>
</html>
