<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutsController extends Controller
{
    public function checkout(){
        return view('posts.checkout');
    }
}
