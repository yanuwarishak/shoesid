<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Post;
use DB;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function add(Request $request)
    {
        // $user_id=$request->input('user_id');
        // $barang_id=$request->input("barang_id");
        // $

        //
        $cart = new Cart;
        $cart -> product_id = $request -> input('barang_id');
        $cart -> user_id = $request -> input('user_id');
        $cart -> size = $request -> input('size');
        $cart -> save();
        return redirect('/cart') -> with('success', 'Item Added to Cart');


    }


    public function index()
    {
        //
        $carts = Cart::orderBy('created_at');
        $posts = Post::orderBy('created_at','desc') -> paginate(4);
        return view('orders.cart')->with('posts', 'carts', $carts, $posts);
      
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
