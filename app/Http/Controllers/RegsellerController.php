<?php

namespace App\Http\Controllers;

use App\Seller;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_toko' => ['required', 'string', 'max:255', 'unique:users'],
            'addr_toko' => ['required', 'string', 'max:500',],
            'phone_toko' => ['required', 'string',],
            'logo_toko' => ['required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']
        ]);

        //Handle File Upload
        if($request -> hasFile('logo_toko')){
            
            //Get Filename with the extension
            //this will put the exact filename eg myimage.jpg or myimage.png,
            //this will get that for you, you could procees to add that to database
            //you could call it filename to store
            $filenameWithExt = $request -> file ('logo_toko') -> getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request -> file('logo_toko') -> getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request -> file('logo_toko') -> storeAs('public/logo_toko', $fileNameToStore);
        } else{
                $fileNameToStore = 'noimage.jpg';
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nama_toko' => $data['nama_toko'],
            'addr_toko' => $data['addr_toko'],
            'phone_toko' => $data['phone_toko'],
            'users.type' => 'admin',
            'logo_toko' => $data['logo_toko'],
        ]);
    }
}
