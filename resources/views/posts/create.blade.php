@extends('layouts.app')

@section('content')

<div class="container">
    <div class="spacer" style="padding-bottom:30px!important">
        <h1 class="m-t-10 text-center" style="padding-bottom:-20px">Post Produk Baru</h1>
    </div>

        {!! Form::open(["action" => "PostsController@store", "method" => "POST", 'enctype' => 'multipart/form-data']) !!}
        <div class="row">    
            <div class="col-md-6">
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                {{Form::label('harga', 'Harga (Hanya Angka e.g : 150000)')}}
                {{Form::text('harga', '', ['class' => 'form-control', 'placeholder' => 'Harga'])}}
            </div>
            </div>
        </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            <div class = "form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-success pull-right'])}}
        {!! Form::close() !!}
</div>
@endsection