@extends('layouts.app')

@section('content')
<div class="container">
    <div class="spacer" style="padding-bottom:30px!important">
        <h1 class="m-t-10 text-center" style="padding-bottom:-20px">Keranjang Kamu</h1>
    </div>
    <br>
    <br>
    <div class="row">
            <div class="col-lg-12">
                <!-- column  -->
                <div class="row shop-listing">
                    <?php $total=0; ?>
                    @if(count($carts) > 0)
                        @foreach ($carts as $cart)
                        <?php $total += $cart->harga; ?>
                            <div class="col-lg-3">
                                <img style="width:100%" src="/storage/cover_images/{{$cart -> cover_image}}">
                                <div class="card" id={{ $cart->id }}>
                                    <h5 class="m-t-5" style="text-align:center; color:blue">{{$cart->title}}</h5>
                                    <h6 style="text-align:center"> By : {{$cart->toko}}</h6>
                                    <h5 style="text-align:center" class="m-b-10"> Harga : {{$cart->harga}}</h5>
                                    <div class="row justify-content-center">
                                        @if(!Auth::guest())
                                            @if(Auth::user()-> id == $cart -> user_id)
                                                {!!Form::open (['action' => ['CartsController@destroy', $cart->id], 'method' => 'DELETE', 'class' => 'pull-right' ])!!} 
                                                    {{Form::hidden ('_method','DELETE')}}
                                                    {{Form::submit('Delete From Cart', ['class' => 'btn btn-danger btn-delete m-b-5', 'id' => $cart->id])}}
                                                {!!Form::close()!!}
                                            @endif
                                        @endif
                                    </div>
                                    <div class="row form-group justify-content-center ">
                                        <label class= "col-form-label m-r-10 m-t-5"> Size :</label>
                                            {!! Form::open(["action" => "CheckoutController@store", "method" => "POST", 'enctype' => 'multipart/form-data']) !!}
                                            {{Form::selectRange('size', 37, 45, null, ['class' => 'cart-size form-control'])}}
                                            {{ Form::hidden('product_id', $cart->product_id, ['class' => 'cart-product-id']) }}
                                            {{ Form::hidden('toko', $cart->toko, ['class' => 'cart-toko']) }}
                                    </div>                                
                                </div>
                            </div>
                                    
                        @endforeach              
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-inverse card-info">
                    <div class="card-body">
                        <h4 class="card-title text-white"> Total Harga :</h4> 
                        <h3 class="card-title text-white pull-right"><?php echo "Rp. ". $total; ?> </h3>
                    </div>
                    <div class="card-footer">
                        {{Form::submit('Checkout', ['class' => 'btn btn-success pull-right', 'id' => 'btn-submit', 'style'=> 'width:100%'])}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
    </div>
</div>

    @else
    <div class="container" style="text-align:center">
        <h3 >Your Cart is empty</h3>
        <a href='/'>Back to Shop</a>
    </div>
    @endif
    
    <script>
        let carts = [];

        let cartSizes = $('.cart-size');
        let cartProductIds = $('.cart-product-id');
        let cartTokos = $('.cart-toko');
        let btnDelete = $('.btn-delete');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $('.btn-delete').click(function(event) {
            event.preventDefault();
            let cartId = $(this).attr('id');
            $.ajax({
                type: "DELETE",
                url: "/cart/delete/" + cartId,
                complete: function(response) {
                    window.location.replace('/cart');
                }
            });
        })

        $('#btn-submit').click(function(event) {
            event.preventDefault();
            let data = [];
            for (let i=0;i<cartSizes.length;i++) {
                let product = {};
                product['productId'] = Number(cartProductIds[i].value);
                product['size'] = Number(cartSizes[i].value);
                product['toko'] = String(cartTokos[i].value);
                data.push(product);
            }
            data = JSON.stringify(data);
            $.ajax({
                type: "POST",
                url: "/checkout",
                data: data,
                contentType: "application/json",
                processData: false,
                success : function(response) {
                    window.location.replace('/checkout');
                }
            });
        });
    </script>
    @endsection
