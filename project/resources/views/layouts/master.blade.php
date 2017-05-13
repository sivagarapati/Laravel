<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">    <!-- Facades  for nested url helper-->   
    </head>
    <body>
        @include('partials.header')
        <div class="container">
        @yield('content')
        </div>
    </body>
</html>
