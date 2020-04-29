<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Бош саҳифа</title>

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
                        <a href="{{ url('/home') }}">My account</a>
                    @else
                        <a href="{{ route('login') }}">Тизимга кириш</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Рўйхатдан ўтиш</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <marquee>
                    <div style="color: red"> Uyda qoling! | Stay at home! | Оставайтесь дома! | Уйда қолинг!</div>
                </marquee>
                <div class="title m-b-md">
                    Коронавирус (Covid19)
                </div>

                <div class="links">
                    <a href="show" style="color: black">Маълумотларни кўриш</a>
                     <!--<a href="https://laravel-news.com">Маълумотларни кўриш</a>-->
                    <!--<a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://www.emerge-centre.uz">Nova</a>-->
                    <a href="https://www.emerge-centre.uz" style="color: green">РШТЁИМ</a>
                    <a href="https://kun.uz/covid19" style="color: red">Янгиликлар</a>
                    <a href="https://minzdrav.uz" style="color: blue">Ўз ССВ</a>
                </div>
            </div>
        </div>
    </body>
</html>
