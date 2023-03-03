<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
</head>
<body>
    <h1>layout backend</h1>
    @include('parts.backend.header')
    @yield('content')
    @include('parts.backend.footer')
    <script src="{{asset('backend/js/scripts.js')}}"></script>
</body>
</html>