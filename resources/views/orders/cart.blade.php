@extends('layouts.app')
<br>
<br>
<br>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 text-center">
            <h2 class="title">Your Cart</h2>
        </div>
    </div>
    <div class="row m-t-30">
        <!-- column  -->
        <div class="col-lg-12">
            <?php $total=0; ?>
            @if(count($carts) > 0)
                @foreach ($carts as $cart)
                <?php $total += $cart->harga; ?>
                <div class="row shop-listing">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="col-nd-4">
                                <img style="width:100%" src="/storage/cover_images/{{$cart -> cover_image}}">
                            </div>
                        </div>
                        <div class="card">
                            <h5><a>{{$cart->title}}</a></h5>
                            <h5 class="font-medium m-b-30"> Harga : {{$cart->harga}}</h5>
                        </div>
                    </div>
                </div>
                @if(!Auth::guest())
                @if(Auth::user()-> id == $cart -> user_id)
                {!!Form::open (['action' => ['CartsController@destroy', $cart->id], 'method' => 'POST', 'class' => 'pull-right' ])!!} 
                    {{Form::hidden ('_method','DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
                @endif
               
            @endif
                @endforeach
        </div>
        <div class="card" style='pull-right'>
            <?php echo "Total harga : Rp". $total; ?>
        </div>
    </div>
    @else
    <h3>Your Cart is empty</h3>
    <a href='/'>Back to Shop</a>

    @endif
    @endsection
