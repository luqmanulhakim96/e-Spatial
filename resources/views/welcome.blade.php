<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-toke" content="{{csrf_token()}}">

        <title>JPSM e-Spatial - Laman Utama</title>

        <!-- Fonts -->
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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Log Masuk</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Daftar</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    JPSM e-Spatial
                </div>
                <div id="app">

                </div>
                <div class="links">
                    <a href="https://www.forestry.gov.my/my/">Jabatan Perhutanan Semenanjung Malaysia</a>
                </div>
                <br>
                <div class="links">
                  <a href="https://www.artaniscloud.com/">made by Artanis Cloud Sdn. Bhd.</a>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset ('js/app.js') }}">
            Echo.channel('home')
              .listen('NewNotification', (e) => {
                console.log(e.message);
              });
              console.log("hi");
        </script>
    </body>
</html>
