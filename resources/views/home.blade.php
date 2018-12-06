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

                    Hai kamu menemukan fitur penjual!
                    <br>
                    <p> Ayo daftarkan tokomu untuk menjadi penjual </p>
                    <a href="/" class="btn btn-secondary">Kembali ke Toko </a>
                    @if (Route::has('register'))
                        <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
