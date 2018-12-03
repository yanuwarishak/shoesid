<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //call a function
    public function home(){

        //return view('pages.index', compact('title'));
        return view('pages.home');
    }

    public function about(){
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array (
            'title' => 'Services',
            'services' => ['Web Design','Programming','SEO','Flintstone']
        );
        return view('pages.services')->with($data);
    }
}
