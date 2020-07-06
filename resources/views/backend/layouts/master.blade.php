<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/main.css') }}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            img {
                width: 100%;
            }
            .top-header {
                background: #716d8e;
            }
            .nav-link {
                color: #fff;
                text-transform: uppercase;
                font-weight: 700;
            }
            .navbar-brand {
                color: #fff;
                font-weight: 700;
            }
            .top-header a:last-child {
                padding-left: 10px;
            }
            .mart-hr {
                width: 2px;
                background: grey;
                height: 100%;
            }
            .section-one, .section-two {
                padding-top: 40px;
            }
            .section-one h6, .section-two h6 {
                padding: 15px 0 30px 0;
            }
            .section-one h4, .section-two h4 {
                padding-top: 15px;
            }
            .side-top {
                padding-top: 60px;
            }
            .padd-70 {
                padding-top: 70px;
            }
            .sidebar {
                background: #716d8e;
                padding: 40px 20px;
            }
            .sidebar h1{
                color: #fff;
                text-align: center;
            }
            .sidebar h4 {
                padding-top: 20px;
                color: #fff;
            }
            .sidebar h4 a {
                color: #fff;
            }
        </style>
    </head>
    <body>
       @include('backend.partials.header')

       <div class="admin-body">
           <div class="container">
               <div class="row">
                       <div class="col-md-4">
                           @include('backend.partials.sidebar')
                       </div>
                       <div class="col-md-8">
                           
                          @yield('content')
                       </div>
               </div>
           </div>
       </div>



        <script src="{{ asset('public/js/app.js') }}"></script>
    </body>
</html>
