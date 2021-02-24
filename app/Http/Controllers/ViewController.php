<?php

namespace App\Http\Controllers;

use App\Client;
use App\Order;
use App\Product;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
    
	$clients = Client::get();
	
	//selecting active orders
	$rawOrders = Order::where('status', '<', '4')->get();
	 
	foreach($rawOrders as $order){
	
	    $clientName = Client::where('id',$order->client_code)->get('name');
	   
	    $ordersProducts = Product::where('order_id', $order->id)->get();
	    
	    foreach($ordersProducts as $product){
	        $orders[] = [
	        	'client'  => $clientName[0]->name,
	        	'product' => $product->product,
	        	'qty'	  => $product->qty
	        ];
	        
	        if($product->status < 2){
		        $productsToArrive[] =[
		        	'id'	  => $product->id,
		        	'product' => $product->product
		        ];
		}
	    }    
	    
	}
	
	
	$products = Product::get();
	
	
	return view('home', compact('clients', 'orders', 'products','productsToArrive'));
    
    }
}
