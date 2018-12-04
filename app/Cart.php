<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // Table Name
    protected $table = 'carts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this -> belongsTo('App\User');
    }

    public function post(){
        return $this -> belongsTo('App\Post');
    }
}
