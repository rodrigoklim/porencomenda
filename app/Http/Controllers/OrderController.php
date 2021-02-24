<?php

namespace App\Http\Controllers;

use App\Client;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function newOrder(Request $request)
    {
    	
    	$client = Client::where('cpf', $request->cpf)->get('id');
    	
    	$orderId = Order::create([
    		    'created_at'    => date("Y-m-d H:i:s"),
    		    'updated_at'    => date("Y-m-d H:i:s"),
    		    'delivery_date' => $request->deliveryDate,
    		    'amount'	    => $request->totalAmount,
    		    'amount_paid'   => $request->payment,
    		    'comments' 	    => $request->comment,
    		    'status'	    => '1',
    		    'client_code'   => $client[0]->id
    		])->id;
    	
    	foreach($request->product as $product){
    	    $product = explode('|', $product);
    	    
    	    $newProduct = Product::create([
    	    	 'created_at'   => date("Y-m-d H:i:s"),
    		 'updated_at'   => date("Y-m-d H:i:s"),
    		 'product'	=> $product[0],
    		 'price'	=> $product[1],
    		 'qty'		=> $product[2],
    		 'distr'	=> $product[3],
    		 'order_id'	=> $orderId
    	    	]);
    	
    	}
    	return redirect()->back();
    }
}
