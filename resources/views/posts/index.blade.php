@extends('layouts.app')



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
                                    <p class="font-weight-bold">Harga : {{$post->harga}}</p>
                                    <p></p>
                                    <a style="width:50%" class="btn btn-info-gradiant" href="/posts/{{$post->id}}"> Beli </a>     
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</div> 
            {{$posts->links()}}
        @else
            <p>Gudang sepatu kita terbakar</p>
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
                                <img style="width:100%" src={!! asset ('image-assets/top-brand/wakai.jpg')!!}></i>
                                    <h6 class="ser-title">WAKAI</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <img style="width:100%" src={!! asset ('image-assets/top-brand/ardiles.png') !!}></i>
                                    <h6 class="ser-title">Ardiles</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <img style="width:100%" src={!! asset ('image-assets/top-brand/carvil.png') !!}></i>
                                    <h6 class="ser-title">Carvil</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <img style="width:100%" src={!! asset ('image-assets/top-brand/eagle.png') !!}></i>
                                    <h6 class="ser-title">Eagle</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <img style="width:100%" src={!! asset ('image-assets/top-brand/brodo.jpg') !!}></i>
                                    <h6 class="ser-title">Bro.do</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <img style="width:100%" src={!! asset ('image-assets/top-brand/Kasogi.jpg') !!}></i>
                                    <h6 class="ser-title">Kasogi</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <img style="width:100%" src={!! asset ('image-assets/top-brand/yongki-komaladi.png') !!}></i>
                                    <h6 class="ser-title">Yongki Komaladi</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-shadow">
                                <img style="width:100%" src={!! asset ('image-assets/top-brand/tomkins.jpg') !!}></i>
                                    <h6 class="ser-title">Tomkins</h6>
                                </a>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
            </div>

@endsection