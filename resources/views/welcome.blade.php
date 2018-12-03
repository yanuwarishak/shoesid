<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>

    <!-- column  -->
                      <!-- column  -->
                      <div class="col-lg-3">
                            <div class="card shop-hover">
                                <img src="{{ asset("image-assets/wakai-keds1.jpg") }}" alt="wrapkit" class="img-fluid" />
                                <div class="card-img-overlay align-items-center">
                                    <button class="btn btn-md btn-info-gradiant" href="shop-detail.html">Beli</button>
                                </div>
                                <span class="label label-rounded label-success">Sale</span>
                            </div>
                            <div class="card">
                                <h6><a href="shop-detail.html" class="link">Signore Parang Jati Oxblood </a></h6>
                                <h6 class="subtitle">by Brodo</h6>
                                <h5 class="font-medium m-b-30">Rp. 729.000 / <del class="text-muted line-through">Rp. 829.000</del></h5>
                            </div>
                        </div>
                        <!-- column  -->
                        <!-- column  -->
                        <div class="col-lg-3">
                            <div class="card shop-hover">
                                <img src="{{ asset("image-assets/wakai-keds1.jpg") }}" alt="wrapkit" class="img-fluid" />
                                <div class="card-img-overlay align-items-center">
                                    <button class="btn btn-md btn-info-gradiant" href="shop-detail.html">Beli</button>
                                </div>
                            </div>
                            <div class="card">
                                <h6><a href="shop-detail.html" class="link">IVY-Navy Women </a></h6>
                                <h6 class="subtitle">by WAKAI</h6>
                                <h5 class="font-medium m-b-30">Rp. 549.000</del></h5>
                            </div>
                        </div>
                        <!-- column  -->
                        <!-- column  -->
                        <div class="col-lg-3">
                            <div class="card shop-hover">
                                <img src="{{ asset("image-assets/wakai-keds1.jpg") }}" alt="wrapkit" class="img-fluid" />
                                <div class="card-img-overlay align-items-center">
                                    <button class="btn btn-md btn-info-gradiant" href="shop-detail.html">Beli</button>
                                </div>
                            </div>
                            <div class="card">
                                <h6><a href="shop-detail.html" class="link">Yongki Komaladi </a></h6>
                                <h6 class="subtitle">by Yongki Komaladi</h6>
                                <h5 class="font-medium m-b-30">Rp. 259.000</del></h5>
                            </div>
                        </div>
                        <!-- column  -->
                        <div class="col-lg-12">
                            <nav class="">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item ">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
</html>
