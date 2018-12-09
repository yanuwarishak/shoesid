@extends('layouts.app')

@section('content')
<div class="container">
    <div class="spacer" style="padding-bottom:30px!important">
        <h1 class="m-t-10 text-center" style="padding-bottom:-20px">Dashboard Toko</h1>
    </div>
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h3>Your Product</h3>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Foto Produk</th>
                            <th>Nama Produk</th>
                            <Th>Harga Produk</Th>
                            <th>Edittt</th>
                            <Th></Th>
                        </tr>

                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->cover_image}}</td>
                                <td>{{$post -> title}}</td>
                                <td>{{$post->harga}}</td>
                                <td><a href="/posts/{{$post -> id}}/edit" class="btn btn-warning btn-sm "> Edit</a>
                                    {!!Form::open (['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-left' ])!!} 
                                    {{Form::hidden ('_method','DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
                                    {!!Form::close()!!}    
                                </td>    
                            </tr>    
                        @endforeach
                        
                        @else
                        <div class="container" class="text-align:center">
                            <p>You don't have any Product</p>
                        </div>
                    @endif
                    </table>
                    <a href="/posts/create" class="btn btn-info pull-right">Create Post</a>
                </div>
            </div>
</div>
@endsection
