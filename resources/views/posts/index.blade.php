@extends('layouts.app')
<br>
<br>
<br>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 text-center">
        <h2 class="title">Best Seller</h2>
        </div>
    </div>
    <div class="row m-t-30">
        <!-- column  -->
         <div class="col-lg-12">
            <div class="row shop-listing">
                @if(count($posts) > 0)
                    @foreach ($posts as $post)
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="col-nd-4">
                                    <img style="width:100%" src="/storage/cover_images/{{$post -> cover_image}}">
                                </div>
                            </div>
                            <div class="card">
                                    <h5><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                                    <b>by {{$post -> user -> name}}</b>
                                    <h5 class="font-medium m-b-30"> Harga : {{$post->harga}}</h5>
                                    <a style="width:50%" class="btn btn-info btn-sm" href="/posts/{{$post->id}}"> Detail </a>

                                        <form action="/cart/add" method="POST" >
                                            @csrf
                                            <input type="hidden" value="{{$post->id}}" name="barang_id">
                                            <input type="hidden" value="1" name="user_id">
                                            <input type="hidden" value="{{$post->harga}}" name="harga">
                                            <input type="hidden" value="{{$post->cover_image}}" name="cover_image">
                                            <input type="hidden" value="{{$post->title}}" name="title">            
                                            <input type="hidden" value="1" name="size">
                                            <input type="submit" style="width:50%" class="btn btn-info-gradiant" value="Add to Cart"> 
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
            <p>No Product Available</p>
        @endif

        <div class="spacer feature24">
                <div class="container">
                    <!-- Row -->
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center">
                            <h2 class="title">Top Brand</h2>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="row wrap-feature-24">
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/wakai.png')!!}></i>
                                    <h6 class="ser-title">WAKAI</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/ardiles.png') !!}></i>
                                    <h6 class="ser-title">Ardiles</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/carvil.png') !!}></i>
                                    <h6 class="ser-title">Carvil</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/eagle.png') !!}></i>
                                    <h6 class="ser-title">Eagle</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/brodo.png') !!}></i>
                                    <h6 class="ser-title">Bro.do</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/kasogi.png') !!}></i>
                                    <h6 class="ser-title">Kasogi</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/yongki-komaladi.png') !!}></i>
                                    <h6 class="ser-title">Yongki Komaladi</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <a href="javascript:void(0)" class="service-24"> <img src={!! asset ('image-assets/icon-sepatu/tomkins.png') !!}></i>
                                    <h6 class="ser-title">Tomkins</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
            </div>

@endsection