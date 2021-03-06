<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        @include('header')
        <div class="container content">
            @yield('content')
        </div>
    </div>
    <div class="footer">
        @include('footer')
    </div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
