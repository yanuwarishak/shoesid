@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
            <h2 class="title">Your Cart</h2>
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
                                        <br>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div> 
                {{$posts->links()}}
            @else
            <h3>Your Cart is empty</h3>
            <a href='/'>Back to Shop</p>
            
            @endif
@endsection