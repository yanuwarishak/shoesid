@extends('layouts.app')

@section('content')
        <div class="container" style="padding-top:75px">
            <h1>{{$post->title}}</h1>
            <b>by {{$post -> user -> name}}</b>
                 <div class="container">
                    <img style="width:25%" src="/storage/cover_images/{{$post -> cover_image}}">
                    <br><br>
                    {!!$post->body!!}
                </div>
        </div>

        <p>Harga : {{$post->harga}}</p>
        
        <a style="width:50%" class="btn btn-info-gradiant" href="/cart"> Go To Cart </a>
        
        <form action="/cart/add" method="POST" >
            @csrf
            <input type="hidden" value="{{$post->id}}" name="barang_id">
            <input type="hidden" value="{{$post->harga}}" name="harga">
            <input type="hidden" value="{{$post->cover_image}}" name="cover_image">
            <input type="hidden" value="{{$post->title}}" name="title">            
            <input type="hidden" value="1" name="size">
            <input type="submit" style="width:50%" class="btn btn-info-gradiant" value=" Add to Cart"> 
        </form>

        <div>
            @if(!Auth::guest())
                @if(Auth::user()-> id == $post -> user_id)
                <a href="/posts/{{$post -> id}}/edit" class="btn btn-warning">Edit</a>
                {!!Form::open (['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right' ])!!} 
                    {{Form::hidden ('_method','DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
                @endif
            @endif
        </div>

@endsection