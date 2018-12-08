@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_toko" class="col-md-4 col-form-label text-md-right">{{ __('Nama Toko') }}</label>

                            <div class="col-md-6">
                                <input id="nama_toko" type="text" class="form-control{{ $errors->has('nama_toko') ? ' is-invalid' : '' }}" name="nama_toko" value="{{ old('nama_toko') }}" required autofocus>

                                @if ($errors->has('nama_toko'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama_toko') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="addr_toko" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Toko') }}</label>

                            <div class="col-md-6">
                                <input id="addr_toko" type="text" class="form-control{{ $errors->has('addr_toko') ? ' is-invalid' : '' }}" name="addr_toko" value="{{ old('addr_toko') }}" required>

                                @if ($errors->has('addr_toko'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('addr_toko') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_toko" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Telp./HP') }}</label>

                            <div class="col-md-6">
                                <input id="phone_toko" type="text" class="form-control{{ $errors->has('phone_toko') ? ' is-invalid' : '' }}" name="phone_toko" value="{{ old('phone_toko') }}" required>

                                @if ($errors->has('phone_toko'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_toko') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class = "form-group row">
                            <label for="logo_toko" class="col-md-4 col-form-label text-md-right">{{ __('Logo Toko') }}</label>
                            <div class="col-md-6">
                                {{Form::file('logo_image')}}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Daftarin Toko Aku') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
