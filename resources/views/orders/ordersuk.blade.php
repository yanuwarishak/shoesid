@extends('layouts.app')
<br>
<br>
<br>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Order Berhasil Diproses</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-sm-center">
                        <img src="{{asset ("image-assets/sukses.gif")}}" style="height:300px" alt="succeed" />
                    </div>
                    <div class="row justify-content-sm-center">
                        <a href="/" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>  Ayo Belanja Lagi  </a>
                    </div>
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
