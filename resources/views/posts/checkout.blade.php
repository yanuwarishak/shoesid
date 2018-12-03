@extends('layouts.app')

@section('content')
        <h1>Post Produk Baru</h1>
        {!! Form::open(["action" => "CheckoutsController@store", "method" => "POST", 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('harga', 'Harga')}}
                {{Form::text('harga', '', ['class' => 'form-control', 'placeholder' => 'Harga'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            <div class = "form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
@endsection