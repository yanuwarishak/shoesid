@extends('layouts.app')

@section('content')
<div class="page-wrapper">

        <div class="container-fluid">

            <div class="spacer team4">
                <div class="container">
                    <div class="row justify-content-center m-b-30">
                        <div class="col-md-7 text-center">
                            <h2 class="title">Order List</h2>
                        </div>
                    </div>
                    <div class="row m-t-30">
                        <div class="card" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Daftar Order</h4>
                                <!-- <h6 class="card-subtitle">Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive </code></h6> -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal </th>
                                                <th>Nama</th>
                                                <th>Produk</th>
                                                <th>Ukuran</th>
                                                <th>Harga </th>
                                                <th>Alamat </th>
                                                <th>Keterangan </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if(count($orders) > 0)
                                                @foreach ($orders as $order)
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{$order-> created_at}}</td>
                                                    <td>{{$order-> customer -> nama}}</td>
                                                    <td>Sepatu WakWay</td>
                                                    {{-- {{$order-> post -> title}}  --}}
                                                    <td>{{$order-> size}}</td>
                                                    <td>Rp 130.000</td>
                                                    {{-- {{$order-> post -> harga}} --}}
                                                    <td>{{$order-> customer -> alamat}}Pogung Kidul, Yogyakarta</td>
                                                    <td><input type="button" class="btn btn-sm btn-success" value="Complete"> </td>
                                                </tr>
                                                @endforeach
                                            @endif
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr >
                                                <td colspan="7" style="text-align:right">
                                                <h6>Total Order : <b>10</b> Produk</h6>
                                                </td>
                                            <tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection