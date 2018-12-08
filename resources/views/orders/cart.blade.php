@extends('layouts.app')

@section('content')
<div class="container">
        <div class="banner-innerpage">
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-md-6 align-self-center text-center">
                            <h1 class="title" style="color:black">Your Cart</h1>
                        </div>
                    </div>
                </div>
        </div>
    <br>
    <br>
    <div class="col-lg-12">
        <!-- column  -->
        <div class="row shop-listing">
            <?php $total=0; ?>
            @if(count($carts) > 0)
                @foreach ($carts as $cart)
                <?php $total += $cart->harga; ?>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="col-nd-4">
                                @if(!Auth::guest())
                                    @if(Auth::user()-> id == $cart -> user_id)
                                        {!!Form::open (['action' => ['CartsController@destroy', $cart->id], 'method' => 'DELETE', 'class' => 'pull-right' ])!!} 
                                        {{Form::hidden ('_method','DELETE')}}
                                        {{Form::submit('Delete From Cart', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    @endif
                                @endif
                                <img style="width:100%" src="/storage/cover_images/{{$cart -> cover_image}}">
                            </div>
                        </div>

                        <div class="card" id={{ $cart->id }}>
                            <h5><a>{{$cart->title}}</a></h5>
                            <h5 class="font-medium m-b-30"> Harga : {{$cart->harga}}</h5>
                            <h5 class="font-medium m-b-30"> By : {{$cart->toko}}</h5>
                                <div class="form-group">
                                        {!! Form::open(["action" => "CheckoutController@store", "method" => "POST", 'enctype' => 'multipart/form-data']) !!}
                                        Size : {{Form::selectRange('size', 37, 45, null, ['class' => 'cart-size'])}}
                                        {{ Form::hidden('product_id', $cart->product_id, ['class' => 'cart-product-id']) }}
                                        {{ Form::hidden('toko', $cart->toko, ['class' => 'cart-toko']) }}
                                </div>
                        </div>
                    </div>
                            
                @endforeach
            
                
        </div>
        <div class="card">
            <br>
            <?php echo "Total harga : Rp. ". $total; ?>
            <br>
            <br>

            {{Form::submit('Checkout', ['class' => 'btn btn-primary', 'id' => 'btn-submit'])}}
            {!! Form::close() !!}

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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#btn-submit').click(function(event) {
            event.preventDefault();
            console.log(cartSizes);
            console.log(cartProductIds);
            console.log(cartTokos);
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
                    console.log(response);
                    $('html').empty();
                    $('html').html(response);
                }
            });
        });
    </script>
    @endsection
