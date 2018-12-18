<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Readers News</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                margin-top: 30px;
                font-size: 44px;
                padding-bottom: 30px;
                border-bottom: 1px solid #eee;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 14px;
            }
            .links {
                margin-bottom: 30px;
                padding-bottom: 14px;
                border-bottom: 1px solid #eee;
                position: absolute;
            }
            .article-title {
                font-weight: bold;
                font-size: 32px;
                padding-bottom: 10px;
            }
            .main-article {

            }
            img {
                border-radius: 5px;
                position: relative;
            }
            .main-article-link a {
                color: #68E1DC;
                text-decoration: none;
                font-weight: bold;
            }
            .main-article-author {}
            .following-articles {
                margin-top: 20px;
            }
            .more-articles {
                margin-top: 30px;
                margin-bottom: 30px;
                font-size: 22px;
                font-weight: bold;
            }
            .article {
                margin-bottom: 30px;
                position: relative;
            }
            .links-stick {
                position: fixed;
                width: 100%;
                background: #fff;
                top: 0;
                z-index: 101;
            }
            .logo {
                display: none;
            }
            .following-articles-title {
                color: #fff;
                font-weight: bold;
            }
            .article-info {
                position: absolute;
            }
        </style>
        <script>
            $(document).ready(function () {
                var topPos = $('.links').offset().top;

                $(window).scroll(function(){
                    var scroll = ( $(this).scrollTop() > ( topPos - 15 ) );

                    if(scroll == true) {
                        $('.links').css({
                            position: 'fixed',
                            width: $('.container').width(),
                            background: '#fff',
                            top: 0,
                            paddingTop: '15px',
                            zIndex: 101,
                        });
                        $('.main-article').css({
                            marginTop: "60px"
                        });
                        $('.logo').slideDown();
                    } else {
                        $('.links').css({
                            position: 'relative',
                            paddingTop: 0,
                        });
                        $('.logo').hide();
                    }
                });
            });
        </script>
    </head>
    <body>
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <div class="title m-b-md">
                            The Readers News
                        </div>

                        <div class="links">
                            <strong class="pull-left logo" style="font-weight: bold;">TRN</strong>
                            <a href="/">Home</a>
                            <a href="/top-stories">Top Stories</a>
                            <a href="/latest-news">News</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row main-article">
                <div class="col-md-8"><img width="100%" src="https://heroichollywood.com/wp-content/uploads/2018/12/Spider-Man-Homecoming-Avengers-Endgame-Tony-Stark.jpg" class="img-responsive"/> </div>
                <div class="col-md-4">
                    <div class="main-article-link">
                        <a href="https://heroichollywood.com/spider-man-avengers-endgame-marvel-plans">Heroichollywood.com</a>
                    </div>
                    <div class="article-title">The point of using Lorem Ipsum</div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    <div class="main-article-author">Mike Annerino - 1 hour ago  <i class="fa fa-comment"></i> <i class="fa fa-bookmark"></i></div>
                </div>
            </div>
            <div class="row more-articles">
                <div class="col-md-12">More articles...<hr></div>
            </div>
            <div class="row following-articles">
                <div class="col-md-4 article">
                    <img width="100%" src="https://i.guim.co.uk/img/media/021b238f2a9b32910d45bb9c0b06f0e3c210b112/0_326_3984_2390/master/3984.jpg?width=1200&height=630&quality=85&auto=format&fit=crop&overlay-align=bottom%2Cleft&overlay-width=100p&overlay-base64=L2ltZy9zdGF0aWMvb3ZlcmxheXMvdGctZGVmYXVsdC5wbmc&s=816ba7df66f3fa2bb8447fdd12d795c0"/>
                    <div class="article-info">
                        <a href="#">Sport</a>
                        <div class="following-articles-title">The point of using Lorem Ipsum</div>
                    </div>
                </div>
                <div class="col-md-4 article">
                    <img width="100%" src="https://i.guim.co.uk/img/media/021b238f2a9b32910d45bb9c0b06f0e3c210b112/0_326_3984_2390/master/3984.jpg?width=1200&height=630&quality=85&auto=format&fit=crop&overlay-align=bottom%2Cleft&overlay-width=100p&overlay-base64=L2ltZy9zdGF0aWMvb3ZlcmxheXMvdGctZGVmYXVsdC5wbmc&s=816ba7df66f3fa2bb8447fdd12d795c0"/>
                </div>
                <div class="col-md-4 article">
                    <img width="100%" src="https://i.guim.co.uk/img/media/021b238f2a9b32910d45bb9c0b06f0e3c210b112/0_326_3984_2390/master/3984.jpg?width=1200&height=630&quality=85&auto=format&fit=crop&overlay-align=bottom%2Cleft&overlay-width=100p&overlay-base64=L2ltZy9zdGF0aWMvb3ZlcmxheXMvdGctZGVmYXVsdC5wbmc&s=816ba7df66f3fa2bb8447fdd12d795c0"/>
                </div>
                <div class="col-md-4 article">
                    <img width="100%" src="https://i.guim.co.uk/img/media/021b238f2a9b32910d45bb9c0b06f0e3c210b112/0_326_3984_2390/master/3984.jpg?width=1200&height=630&quality=85&auto=format&fit=crop&overlay-align=bottom%2Cleft&overlay-width=100p&overlay-base64=L2ltZy9zdGF0aWMvb3ZlcmxheXMvdGctZGVmYXVsdC5wbmc&s=816ba7df66f3fa2bb8447fdd12d795c0"/>
                </div>
                <div class="col-md-4 article">
                    <img width="100%" src="https://i.guim.co.uk/img/media/021b238f2a9b32910d45bb9c0b06f0e3c210b112/0_326_3984_2390/master/3984.jpg?width=1200&height=630&quality=85&auto=format&fit=crop&overlay-align=bottom%2Cleft&overlay-width=100p&overlay-base64=L2ltZy9zdGF0aWMvb3ZlcmxheXMvdGctZGVmYXVsdC5wbmc&s=816ba7df66f3fa2bb8447fdd12d795c0"/>
                </div>
                <div class="col-md-4 article">
                    <img width="100%" src="https://i.guim.co.uk/img/media/021b238f2a9b32910d45bb9c0b06f0e3c210b112/0_326_3984_2390/master/3984.jpg?width=1200&height=630&quality=85&auto=format&fit=crop&overlay-align=bottom%2Cleft&overlay-width=100p&overlay-base64=L2ltZy9zdGF0aWMvb3ZlcmxheXMvdGctZGVmYXVsdC5wbmc&s=816ba7df66f3fa2bb8447fdd12d795c0"/>
                </div>
            </div>
        </div>
    </body>
</html>
