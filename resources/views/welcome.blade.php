<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-toke" content="{{csrf_token()}}">


        <title>JPSM eSpatial - Laman Utama</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">


        <!-- Styles -->
        <style>
.btn {
  border: 2px solid white;
  background-color: white;
  color: black;
  padding: 20px 28px;
  font-size: 20px;
  width: 140px;
  cursor: pointer;
}

/* Green */
.success {
  background-color: Transparent;
  color: green;
}

.success:hover {
  background-color: #ffff;
  color: black;
}

/* Blue */
.info {
  border-color: #2196F3;
  color: dodgerblue;
}

.info:hover {
  background: #2196F3;
  color: white;
}

/* Orange */
.warning {
  border-color: #ff9800;
  color: orange;
}

.warning:hover {
  background: #ff9800;
  color: white;
}

/* Red */
.danger {
  border-color: #f44336;
  color: red;
}

.danger:hover {
  background: #f44336;
  color: white;
}

/* Gray */
.default {
  border-color: #e7e7e7;
  color: black;
}

.default:hover {
  background: #e7e7e7;
}
</style>
        <style>
            html, body {
                /* background-color: #000; */
                background-image: url('https://studysuccess168956482.files.wordpress.com/2018/10/jungle2.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
                background-color: rgba(0,0,0,0.5);
                    background-blend-mode: darken;
                /* opacity: 0.7; */
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 400;s
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
                position: center;
                bottom: 8rem;
                right: 750px;

            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-family: 'Yeseva One', cursive;
            }

            .links > a {
                color: #fff;
                padding: 15px 25px;
                font-size: 15px;
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
            <div class="content">
                <div class="title m-b-md" style="font-size: 300%">
                     Permohonan Data Geospatial
                </div>

                <div class="links">
                    <a href="https://www.forestry.gov.my/my/">Jabatan Perhutanan Semenanjung Malaysia</a>
                </div>
                <br>

                @if (Route::has('login'))
                    <div class="top-right links" style="margin-top: 20px;">
                        @auth
                            <a class="btn success" href="{{ url('/home') }}">Dashboard</a>
                        @else
                            <a class="btn success" style="margin-right: 5px;" href="{{ route('login') }}">Log Masuk</a>

                            @if (Route::has('register'))
                                <a class="btn success" href="{{ route('register') }}">Daftar</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>


        </div>
    </body>
</html>
