<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function admin()
    {
        $user_id = auth() -> user()->id;
        $user = User::find($user_id);
        return view('dashboard') -> with('posts', $user -> posts);
    }

}
