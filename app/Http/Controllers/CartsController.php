<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Cart;
use App\Post;
use App\User;
use DB;

class CartsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $cart -> harga = $request -> input('harga');
        $cart -> title = $request -> input('title');
        $cart -> cover_image = $request -> input('cover_image');
        $cart -> save();
        //return redirect('/cart') -> with('success', 'Item Added to Cart');
        return back();
        return redirect()->back()->with('success','Item Added to Cart');


    }


    public function index()
    {
        $carts = Cart::all();
        return view('orders.cart')->with('carts', $carts);
        //$posts = Post::orderBy('created_at','desc') -> paginate(4);
        //return view('orders.cart')->with('posts', $posts);
      
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
    public function show()
    {
        $carts = null;
        $user_id = auth() -> user()->id;
        $user = User::find($user_id);
        if ($user) {
            $carts = Cart::where('user_id', $user_id)->get();
        }
        return view('orders.cart')->with('carts', $carts);
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
        
    $cart = Cart::find($id);
    /*
    *       if(auth() -> user() -> id !==$cart -> user_id){
    *          return redirect('/cart') -> with('error', 'Unauthorized Page');
    *    }
    *
    *       $cart -> delete();
    *      return redirect('/cart') -> with('success', 'Item Removed');
    *
    */
    $cart -> delete();
    return redirect('/cart') -> with('success', 'Item Removed'); 
    }
       
}
