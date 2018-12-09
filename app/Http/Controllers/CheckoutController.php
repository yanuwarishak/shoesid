<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Auth;
Use App\Cart;
use App\Post;
use App\User;
use App\Order;
use App\Customer;
use App\CustomerOrder;
use DB;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!request()->is('/checkout') && url()->previous() != url('/cart')){
            return redirect()->to('/cart');
        }

        $id = \Auth::user()->id;
        $carts = null;
        if ($id) {
            $carts = Cart::where('user_id', $id)->get();
        }
        $sizeOfCarts = count($carts);
        $orders = Order::orderBy('id', 'desc')->take($sizeOfCarts)->get();
        return view('orders.checkout')->with('carts', $carts)->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        //Adding to Order Database
        $this -> validate($request, [
            'nama' => 'required',
            'kode_pos' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        $orders = $request->get('orders');

        // $carts = $request
        
        //Create Customer Record
        $id = \Auth::user()->id;
        $customer = new Customer;
        $customer -> user_id = $id;
        $customer -> nama = $request -> input('nama');
        $customer -> kode_pos = $request -> input('kode_pos');
        $customer -> alamat = $request -> input('alamat');
        $customer -> telepon = $request -> input('telepon');
        $customer -> save();
        $customer = Customer::all()->last();
        foreach ($orders as $order) {
            Order::where('id', $order)->update(['customer_id' => $customer->id]);
        }
        Cart::where('user_id', $id)->delete();
        return view('orders.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {

        $id = \Auth::user()->id;
        $carts = null;
        if ($id) {
            $carts = Cart::where('user_id', $id)->get();
        }
        
        $data = json_decode($request->getContent(), true);
        $i = 0;
        foreach($carts as $cart)
        {
            $order = new Order;
            $order->product_id = $data[$i]['productId'];
            $order->user_id = $id;
            $order->size = $data[$i]['size'];
            $order->toko = $data[$i]['toko'];
            $order->customer_id = 0;
            $order->save();
            $i++;
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
