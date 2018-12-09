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
                                            <?php $i=0;?>
                                            @if(count($orders) > 0)
                                                @foreach ($orders as $order)
                                                <tr>
                                                    <td>{{$i+1}}</td>
                                                    <td>{{$order->created_at}}</td>
                                                    <td>{{$order->customer->nama}}</td>
                                                    {{-- {{$order-> customer -> nama}} --}}
                                                    <td>{{$order-> post['title']}}</td>
                                                    {{-- {{$order-> post -> title}}  --}}
                                                    <td>{{$order-> size}}</td>
                                                    <td>Rp. {{$order-> post['harga']}}</td>
                                                    {{-- {{$order-> post -> harga}} --}}
                                                    <td>{{$order->customer->alamat}}</td>
                                                    {{--  --}}
                                                    <td>
                                                        {!!Form::open (['action' => ['OrdersController@destroy', $order->id], 'method' => 'POST', 'class' => 'pull-right' ])!!} 
                                                        {{Form::hidden ('_method','DELETE')}}
                                                        {{Form::submit('Complete Order', ['class' => 'btn btn-danger'])}}
                                                        {!!Form::close()!!}    
                                                    </td>
                                                </tr>
                                                <?php $i++;?>
                                                @endforeach

                                                @else
                                                <td>
                                                    You don't have any Order 
                                                </td>

                                            @endif
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr >
                                                <td colspan="7" style="text-align:right">
                                                <h6>Total Order : <b>{{$i}}</b> Produk</h6>
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