<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Backend Training</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">--}}
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
{{--        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-grid.css') }}">--}}
{{--        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-reboot.css') }}">--}}

    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">Backend Training</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
                    <li><a href="{{ URL::to('/products') }}">Products</a></li>
                    <li><a href="{{ URL::to('/categories') }}">Categories</a></li>
                </ul>
            </div>
        </nav>
        @yield('content')
        <script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    </body>
</html>
