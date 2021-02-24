<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /*
    Status on Order
    status = 1 -> new order
    status = 2 -> product on store
    status = 3 -> client notified
    status = 4 -> product delivered - end of order
    */
    
    protected $fillable = [
    	'created_at', 'updated_at', 'amount', 'amount_paid', 'delivery_date', 'comments', 'status', 'client_code'
    	];
}
