<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function getProducts(Request $request)
    {
        $products = Product::all();

        return response()->json($products, 200);
    }

    public function store(Request $request)
    {
        $order = Order::create();
        $products_ids = collect($request->products)->pluck('id');
        $order->products()->attach(Product::find($products_ids));

        return response()->json(['status' => 1, 'message' => 'El pedido ha sido realizado'], 200);
    }
}
