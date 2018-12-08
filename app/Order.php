<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //Nama tabel
    protected $table = 'orders';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this -> belongsTo('App\User');
    }
}