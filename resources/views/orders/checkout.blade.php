@extends('layouts.app')

@section('content')

<div class="container">
    <div class="spacer" style="padding-bottom:30px!important">
        <h1 class="m-t-10 text-center" style="padding-bottom:-20px">Checkout</h1>
    </div>
        <div class="row m-t-30">
            <!-- column  -->
                    <div class="container">
                        <div class="row m-t-30">
                            <!-- column  -->
                            <div class="col-lg-6">
                                <div class="m-t-15">
                                    <h6 class="m-b-20 font-medium">INFORMASI PENGIRIMAN</h6>
                                    {!! Form::open(["action" => "CheckoutController@add", "method" => "POST", 'enctype' => 'multipart/form-data']) !!}
                                        <div class="form-group">
                                        {{Form::text('nama', '', ['class' => 'form-control', 'placeholder' => 'Nama Lengkap'])}}
                                        </div>
                                        <div class="form-group">
                                        {{Form::text('kode_pos', '', ['class' => 'form-control', 'placeholder' => 'Kode Pos'])}}
                                        </div>
                                        <div class="form-group">
                                        {{Form::textarea('alamat', '', ['class' => 'form-control', 'placeholder' => 'Alamat'])}}
                                        </div>
                                        <div class="form-group">
                                        {{Form::text('telepon', '', ['class' => 'form-control', 'placeholder' => 'Nomer Telepon'])}}
                                        </div>
                                        {{Form::submit('Checkout', ['class' => 'btn btn-primary'])}}
                                </div>
                            </div>
                            <!-- column  -->
                            <div class="col-lg-6 ml-auto">
                                <table class="table shop-table">
                                    <tr>
                                        <th class="b-0">Produk</th>
                                        <th class="b-0">Deskripsi</th>
                                        <th class="b-0 text-right">Harga</th>
                                    </tr>
                                    <?php $total=0; ?>
                                    <?php $i = 0; ?>
                                    @if(count($carts) > 0)
                                        @foreach ($carts as $cart)
                                        <input type="hidden" name="orders[{{ $i }}]" value="{{$orders[$i]->id}}">
                                        {{-- {{Form::hidden('cart[' . $i . ']', $cart->id)}} --}}
                                        <?php $total += $cart->harga; ?>
                                            <tr>
                                                <td><img src="/storage/cover_images/{{$cart -> cover_image}}" width="100" alt="wrapkit" /></td>
                                                <td>
                                                    <h6>{{$cart->title}} </h6>
                                                    <h6 class="subtitle">By : {{$cart->toko}}</h6>
                                                </td>
                                                <td class="text-right">
                                                    <h5 class="font-medium m-b-30"> {{$cart->harga}} </h5>
                                                </td>
                                            </tr>
                                        <?php $i++ ?>
                                        @endforeach
                                    @endif
                                
                                    {!! Form::close() !!}
                                    <tr>
                                        <td colspan="3">
                                            <div class="d-flex">
                                                <span>Total</span>
                                                <h5 class="font-medium m-b-30 ml-auto">
                                                    <?php echo "Rp. ". $total; ?>
                                                </h5>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- End Team 1  -->
            </div>
        </div>
                <!-- End Team 1  -->

@endsection