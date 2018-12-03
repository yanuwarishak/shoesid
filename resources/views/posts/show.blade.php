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
            <hr>
        </div>

        <p>Harga : {{$post->harga}}</p>
        
        <hr>
        <a style="width:50%" class="btn btn-info-gradiant" href="/posts/{{$post->id}}"> Beli </a>
        <a style="width:50%" class="btn btn-info-gradiant" href="/posts/{{$post->id}}"> Checkout </a>
        <a style="width:50%" class="btn btn-info-gradiant" href="/posts/{{$post->id}}"> Add to Cart </a>

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