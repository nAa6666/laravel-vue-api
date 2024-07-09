<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>News</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/styles/app.scss'])
</head>

<body>

<div id="app">
    @yield('content')
</div>

@vite(['resources/js/app.js'])
</body>
</html>
