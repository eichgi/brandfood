<?php

namespace App\Http\Controllers;

use App\Events\NewOrder;
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

        collect($request->products)->each(function ($product) use ($order) {
            $order->products()->attach($product['id'], ['quantity' => $product['quantity']]);
        });

        event(new NewOrder('reload'));
        return response()->json(['status' => 1, 'message' => 'El pedido ha sido realizado'], 200);
    }

    public function getOrders(Request $request)
    {
        $orders = Order::with('products')->orderBy('created_at', 'desc')->limit(10)->get();

        return response()->json(['status' => 1, 'orders' => $orders], 200);
    }
}
