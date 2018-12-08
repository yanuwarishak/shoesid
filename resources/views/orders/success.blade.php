@extends('layouts.app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css" integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css" integrity="sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT" crossorigin="anonymous">

<br>
<br>
<br>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <br>
                <div class="container" style="text-align:center">
                    <h3>Order Berhasil Diproses</h3>
                </div>
                <br>
                <br>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-sm-center">
                        <img src="{{asset ("image-assets/sukses.gif")}}" style="height:300px" alt="succeed" />
                    </div>
                    <br>
                    <br>
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
