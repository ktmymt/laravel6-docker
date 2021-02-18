<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <div id="header">
            @yield('header')
        </div>

        <div id="main">
            @yield('content')
        </div>
    </body>
</html>
