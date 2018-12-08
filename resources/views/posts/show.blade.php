@extends('layouts.app')

@section('content')
<div class="container">
    <div class="spacer" style="padding-bottom:30px!important">
        <h1 class="m-t-10 text-center" style="padding-bottom:-20px">Detail Posts</h1>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <img style="width:25%" class="pull-right" src="/storage/cover_images/{{$post -> cover_image}}">
        </div>
        <div class="col-md-6">
            <h3>{{$post->title}}</h3>
            <h6>by {{$post -> user -> name}}</h6>
            <b>Harga : {{$post->harga}}</b>
            <br>
            {!!$post->body!!}
        <!-- admin session -->
        <div class="row">
            @if(!Auth::guest())
                @if(Auth::user()-> id == $post -> user_id)
                <div class="col-md-3">
                <a href="/posts/{{$post -> id}}/edit" class="btn waves-effect waves-light btn-outline-warning btn-sm" style="width:100%">Edit</a>
                </div>
                <div class="col-md-3">
                {!!Form::open (['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!} 
                    {{Form::hidden ('_method','DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn waves-effect waves-light btn-outline-danger btn-sm', 'style' => 'width:100%'])}}
                {!!Form::close()!!}
                </div>
                @endif
            @endif
        </div>
        <!-- end admin session -->
        <br>
        <!-- tombol add to cart -->
        <form action="/cart/add" method="POST" >
            @csrf
            <input type="hidden" value="{{$post->id}}" name="barang_id">
            <input type="hidden" value="1" name="user_id">
            <input type="hidden" value="{{$post->harga}}" name="harga">
            <input type="hidden" value="{{$post->cover_image}}" name="cover_image">
            <input type="hidden" value="{{$post->title}}" name="title">            
            <input type="hidden" value="{{$post->user->name}}" name="toko">
            <input type="submit" style="width:50%" class="btn btn-info" value=" Add to Cart"> 
        </form>
        <!-- tombol checkout -->
      
        <a style="width:50%" class="btn waves-effect waves-light btn-outline-success" href="/cart"> Go to Cart </a>

        </div>
        
    </div>

        <!-- <h3>{{$post->title}}</h3>
        <h6>by {{$post -> user -> name}}</h6>
                 <div class="container">
                    <img style="width:25%" src="/storage/cover_images/{{$post -> cover_image}}">
                    <br><br>
                    {!!$post->body!!}
                </div>
        </div>

        <p>Harga : {{$post->harga}}</p>
        
        <hr>
        <a style="width:50%" class="btn btn-info-gradiant" href="/posts/checkout"> Checkout </a> -->
        



</div>

@endsection