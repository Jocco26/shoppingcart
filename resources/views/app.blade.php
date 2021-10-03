<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <script>window.laravel = { csrfToken: '{{ csrf_token() }}'}</script>
    <title>Shopping cart</title>

    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="antialliased">
    <div class="container mx-auto">
        <div id="app">
            <router-view></router-view>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>  
</body>
</html>