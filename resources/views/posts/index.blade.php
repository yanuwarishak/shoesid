@extends('layouts.app')

@section('content')

<div class="container-fluid" >
    <!-- Static Slider 10  -->
    <!-- ============================================================== -->
    <div class="banner-innerpage" style="background-image:url({{asset ("image-assets/banner-bg4.jpg")}})">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center ">
                <!-- Column -->
                <div class="col-md-6 align-self-center text-center" >
                    <h1 class="title"> Pilih Sepatumu! </h1>
                </div>
                <div class="spacer"></div>
                <!-- Column -->
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-7 text-center">
            <h2 class="title">Produk Terbaik </h2>

        </div>
    <div class="row m-t-30">
        <!-- column  -->
         <div class="col-lg-12">
            <div class="row shop-listing">
                
                @if(count($posts) > 0)
                    @foreach ($posts as $post)
                        <div class="col-lg-3 justify-content-center">
                            <div class="card">
                                <div class="col-md-4">
                                    <img style="width:100%" src="/storage/cover_images/{{$post -> cover_image}}">
                                </div>
                            </div>

                            <div class="card ">
                                    <h4 style="text-align:center"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                                    <h6 style="text-align:center">by {{$post -> user -> name}}</h6>
                                    <h5 class="font-medium m-b-30" style="text-align:center"> Harga : Rp. {{$post->harga}}</h5>
                                    <span class="justify-content-center"><a class="btn waves-effect waves-light btn-outline-secondary" style="width:100%" href="/posts/{{$post->id}}"> Detail </a></span>

                                        <form action="/cart/add" method="POST" >
                                            @csrf
                                            <input type="hidden" value="{{$post->id}}" name="barang_id">
                                            <input type="hidden" value="{{$post->harga}}" name="harga">
                                            <input type="hidden" value="{{$post->cover_image}}" name="cover_image">
                                            <input type="hidden" value="{{$post->title}}" name="title">            
                                             <input type="hidden" value="{{$post->user->name}}" name="toko">  
                                            <span class="justify-content-center"><input type="submit"  class="btn btn-info-gradiant" style="width:100%" value="Tambahkan Ke Keranjang"></span>
                                        </form>
                                        
                                    <br>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</div> 
            {{-- Buat Paginate --}}
            {{$posts->links()}}
        @else
        <div class="container" style="text-align:center">
            <p>No Product Available</p>
        </div>
        @endif

        <div class="spacer feature24">
            <div class="container">
                <!-- Row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title">Top Brand</h2>
                    </div>
                    <!-- Row -->
                    <div class="row wrap-feature-24">
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/wakai.png')!!}></a>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/ardiles.png') !!}></a>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/carvil.png') !!}></a>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/eagle.png') !!}></a>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/brodo.png') !!}></a>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/kasogi.png') !!}></a>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/yongki-komaladi.png') !!}></a>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/tomkins.png') !!}></a>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
        </div>




</div>
@endsection