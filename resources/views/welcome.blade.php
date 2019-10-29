<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> -->
        <script src="{{asset('js/jquery-ui-v1.11.2.min.js')}}"></script>
        <!-- <script src="{{asset('css/app.css')}}"></script> -->
        <script type="text/javascript" src="{{asset('js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/nunito-light-bold.css') }}" rel="stylesheet">
        <link href="{{ asset('css/roboto.css') }}" rel="stylesheet">
        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('js/all.min.js') }}"> --}}
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <script src="{{ asset('js/styles.js') }}"></script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: ##f5f8fa;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100%;
                width: 100%;
                padding: 0;
                margin: 0;
                font-size: 14px !important;
            }

            .full-height {
                height: 100vh;
            }
            .nabar-header{
              position: absolute;
              width: 100%;
              display: inline;
              text-align: center;
              padding: 20px 0;
              top: 0;
              color: #ffffff !important;
              border-bottom: 3px solid #fff;
              background-color: #ffffff !important;
              margin: auto;
            }
            .nabar-footer{
            position: absolute;
            width: 100%;
            bottom: 0;
            left: 0;
            display: inline;
            text-align: center;
            padding: 20px 0;
            color: #fff;
            border-top: 3px solid #fff;
            background-color: #fff;
          }
            .flex-center {
                text-align: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 15px;
                text-shadow: 100px;
                font-family:sans-serif;
            }

            .links > a {
                color: #ffff;
                padding: 25px;
                font-size: 15px;
                font-weight: 600;
                font-family: serif;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .text{
              font-size: 10px;
              color: black;
              font-family: sans-serif;
            }
        </style>
        @yield('style')
    </head>
    <body>
      @include('navbar')
      @if (Route::has('login'))
                <div class="top-right links">
                        @auth
                            <a href="{{ route('book') }}">Book</a>
                            <a href="{{ route('user') }}">User</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                </div>
            @endif
      @yield('home')
        <div class="">
          <div class="container">
          @yield('content')
          </div>
          <div class="bg-dark p-3 text-white" style="background: url('/img/bg.png'); background-repeat: no-repeat; background-size: cover; ">
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          </div>
    </body>
</html>
