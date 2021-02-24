<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /*
    Product Status
    1 - to arrive
    2 - on store
    3 - delivered
    */
    protected $fillable = [
    		'created_at', 'updated_at', 'product', 'price', 'qty', 'order_id', 'distr', 'status'
    		];
}
