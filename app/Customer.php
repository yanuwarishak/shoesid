<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $table = 'customers';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this -> belongsTo('App\User');
    }

    public function orders(){
        return $this -> hasMany('App\Order');
    }
}
