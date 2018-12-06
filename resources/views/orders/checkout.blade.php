@extends('layouts.app')

@section('content')

    <div id="main-wrapper">
      <div>

        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="banner-innerpage">
                    <div class="container">
                        <div class="row justify-content-center ">
                            <div class="col-md-6 align-self-center text-center">
                                <h1 class="title" style="color:black">Shop Checkout</h1>
                                <h6 class="subtitle op-8" style="color:black">Your cart will be cleared out after this process</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spacer">
                    <div class="container">
                        <div class="row m-t-30">
                            <!-- column  -->
                            <div class="col-lg-5">

                                <form class="m-t-40">
                                    <h6 class="m-b-20 font-medium">INFORMASI PENGIRIMAN</h6>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" value="Nama Depan">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" value="Nama Belakang">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Kode Pos">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <select class="form-control custom-select">
                                                <option>Provinsi</option>
                                                <option>Jawa Tengah</option>
                                                <option>Jawa Timur</option>
                                                <option>Jawa Barat</option>
                                                <option>Jakarta</option>
                                                <option>Banten</option>
                                                <option>Sumatra Selatan</option>
                                                <option>Yogyakarta</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <select class="form-control custom-select">
                                                <option>Kota/Kabupaten</option>
                                                <option>Surakarta</option>
                                                <option>Magelang</option>
                                                <option>Karanganyar</option>
                                                <option>Sragen</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <select class="form-control custom-select">
                                                <option>Kelurahan</option>
                                                <option>Kelurahan 1</option>
                                                <option>Kelurahan 2</option>
                                                <option>Kelurahan 3</option>
                                                <option>Kelurahan 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" value="Nomor Telefon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <form action="/checkout/add" method="POST" >
                                                @csrf
                                                <input type="hidden" value="{{$post->id}}" name="barang_id">
                                                <input type="hidden" value="1" name="user_id">
                                                <input type="hidden" value="{{$post->harga}}" name="harga">
                                                <input type="hidden" value="{{$post->cover_image}}" name="cover_image">
                                                <input type="hidden" value="{{$post->title}}" name="title">            
                                                <input type="hidden" value="1" name="size">
                                                <input type="submit" style="width:50%" class="btn btn-info-gradiant" value=" Add to Cart">
                                                <button type="submit" class="btn btn-info btn-md ">Checkout</button>
                                            </form>    
                                    </div>
                                </form>
                            </div>
                            <!-- column  -->
                            <div class="col-lg-6 ml-auto">
                                <table class="table shop-table">
                                    <tr>
                                        <th class="b-0">Produk</th>
                                        <th class="b-0">Deskripsi</th>
                                        <th class="b-0 text-right">Harga</th>
                                    </tr>
                                    <tr>
                                        <td><img src="../assetsq/wakai-keds1.jpg" width="100" alt="wrapkit" /></td>
                                        <td>
                                            <h6>GYOU Burst - Shamrock Women </h6>
                                            <h6 class="subtitle">Warna Shamrock</h6>
                                            <h6 class="subtitle">Size: 40</h6></td>
                                        <td class="text-right">
                                            <h5 class="font-medium m-b-30">Rp. 729.000 </h5></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <div class="d-flex">
                                                <span>Sub Total</span>
                                                <h5 class="font-medium m-b-30 ml-auto">Rp. 729.000</h5>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <div class="d-flex">
                                                <span>Total</span>
                                                <h5 class="font-medium m-b-30 ml-auto">Rp. 740.000</h5>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection