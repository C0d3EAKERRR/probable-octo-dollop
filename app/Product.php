<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Table Name
    protected $table = 'product';
    // Primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;


    public function user(){
        return $this->belongsTo('App\User');
    }

}

