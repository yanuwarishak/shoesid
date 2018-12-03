@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <Th></Th>
                            <Th></Th>
                        </tr>

                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post -> title}}</td>
                                <td><a href="/posts/{{$post -> id}}/edit" class="btn btn-warning"> Edit</a></td>
                                <td>
                                    {!!Form::open (['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right' ])!!} 
                                    {{Form::hidden ('_method','DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}    
                                </td>    
                            </tr>    
                        @endforeach
                        
                        @else
                            <p>You don't have any post</p>
                    @endif
                    </table>
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection