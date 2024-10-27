<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Patryk Dachwitz">
    <meta name="robots" content="index, follow">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="/files/favicon.ico">
    <title>@lang('mainPage.titlePage')</title>
    @vite([
    'resources/js/app.js',
    'resources/sass/app.scss',
])
</head>
<body>
@include('component.menu', [
    'menu' => $menu ?? ""
])

@yield('content')

@include('component.cookie')
@include('component.footer')
<h1> {{\Illuminate\Support\Facades\Cookie::get('cookie1')}} </h1>
{{--{{ dd(\Illuminate\Support\Facades\Request::cookie()) }}--}}
</body>
</html>
