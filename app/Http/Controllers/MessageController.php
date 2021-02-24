<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use App\Client;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function productArrived(Request $request)
    {
    	//dd($request->arrival[0]);
    	$product = Product::find($request->arrival[0]);
    	$order = Order::find($product->order_id);
    	$client = Client::find($order->client_code);

    	dd($client);
    	$teste = "hello world";
    	return $orderId->order_id; 
    }
}
