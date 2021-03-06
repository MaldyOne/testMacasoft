<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Administrador</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
<!-- Styles -->

<link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
        
    </head>
    <body>
       <div id="adminApp">
            @include('admin.nav')
            @yield('content')
        </div>
        <script src="{{asset('js/app.js')}}"></script>

    </body>
</html>
