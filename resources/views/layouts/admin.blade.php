<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>마스터관리</title>

    @yield('css')
    @yield('scripts.header')
</head>
<body class="theme-default">
@include('layouts.admin.top')
@include('layouts.admin.left')
@yield('content')
@yield('scripts.footer')
</body>
</html>