<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Title Website Icon-->
    <title>{{ config('app.name') }}</title>
    <link rel="icon" href="{!! asset('image-assets/favicon.png') !!}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/animation/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- This is for the animation CSS -->
    <link href="{{ asset('css/animation/aos/dist/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animation/prism/prism.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animation/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animation/bootstrap-touch-slider/bootstrap-touch-slider.css')}}" rel="stylesheet" media="all">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/customs-wrapkit.css')}}" rel="stylesheet">
    <link href="{{ asset('css/shop/shop.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/sliders/slider10.css')}}" rel="stylesheet">
    <link href="{{ asset('css/headers/headers1-10.css')}}" rel="stylesheet">
    <link href="{{ asset('css/headers/headers11-20.css')}}" rel="stylesheet">
    <link href="{{ asset('css/shop/shop.css')}}" rel="stylesheet">
    <link href="{{ asset('css/features/features21-30.css')}}" rel="stylesheet">
    <link href="{{ asset('css/footers/footers.css')}}" rel="stylesheet">
    
    <style>
            html, body {
            width: 100%;
            height: 100%;
            }

            article {
            min-height: 100%;
            display: grid;
            grid-template-rows: auto 1fr auto;
            grid-template-columns: 100%;
            }

            header {
            padding: 2rem;
            }

            main {
            color: #444;
            padding: 1rem;
            }

            footer {
            padding: 1rem;
            }
    </style>


</head>
@include('inc.navbar')

<body>
<article>
        <div class = "page-wrapper">
            @include('inc.messages')
            @yield('content')
            <main class="py-4"></main>
        </div>

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
</article>

<footer>
    <div id="footer">
        <div class="card bg-light mb-3">
            <div class="footer1 font-14">
                    <div class="f1-middle">
                        <div class="container">
                            <div class="row">
                                <!-- Column -->
                                <div class="col-lg-6 col-md-8">
                                <a href="#"><img src="{{asset ("image-assets/blue-logo-text.png")}}" alt="wrapkit" /></a>
                                    <p class="m-t-20">ShoesID – Pusat belanja alas kaki terbesar di Indonesia</p>
                                    <p>ShoesID merupakan pasar sepatu online khusus brand lokal yang memfasilitasi individu maupun pemilik usaha di Indonesia untuk mengelola toko online dan melakukan jual beli secara mudah. ShoesID memberikan pengalaman berbelanja produk alas kaki buatan Indonesia dengan nyaman dan aman. Ayo cintai produk fashion buatan Indonesia ! Bangga dengan produk lokal, bangga dengan karya anak bangsa.</p>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="d-flex no-block m-b-10 m-t-20">
                                        <div class="display-7 m-r-20 align-self-top"><i class="icon-Location-2"></i></div>
                                        <div class="info">
                                            <span class="font-medium text-dark db m-t-5">Shoesid Head Office</span>
                                            <br/>
                                            <p>Sleman,
                                                <br/>Yogyakarta
                                                <br/>Indonesia - 55281</p>
                                        </div>
                                    </div>
                                    <div class="d-flex no-block m-b-10">
                                        <div class="display-7 m-r-20 align-self-top"><i class="icon-Phone-2"></i></div>
                                        <div class="info">
                                            <span class="font-medium text-dark db  m-t-5">1 (888) 123 4567</span>
                                        </div>
                                    </div>
                                    <div class="d-flex no-block m-b-30">
                                        <div class="display-7 m-r-20 align-self-top"><i class="icon-Mail"></i></div>
                                        <div class="info">
                                            <a href="#" class="font-medium text-dark db  m-t-5">info@shoesid.com</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-12 m-t-5">
                                    <h6 class="font-medium m-t-20">Produk yang kami sediakan</h6>
                                    <ul class="general-listing two-part with-arrow m-t-10">
                                        <li><a href="#"> Slip On</a></li>
                                        <li><a href="#"> Sneakers</a></li>
                                        <li><a href="#"> Heels</a></li>
                                        <li><a href="#"> Flat Shoes</a></li>
                                        <li><a href="#"> Wedges</a></li>
                                        <li><a href="#"> Sandal </a></li>
                                        <li><a href="#"> Sepatu Formal </a></li>
                                        <li><a href="#"> Boots</a></li>
                                        <li><a href="#"> Flip Flop </a></li>
                                        <li><a href="#"> Kaos Kaki</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>

</body>
</html>
