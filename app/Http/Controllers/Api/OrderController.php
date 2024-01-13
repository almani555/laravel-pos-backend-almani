<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //store
    public function store(Request $request)
    {
        $request->validate([
            'transaction_time' => 'required',
            'total_price' => 'required|integer',
            'total_item' => 'required|integer',
            'kasir_id' => 'required|integer',
            'order_items.*.product_id' => 'required|exists:products,id',
            'order_items.*.quantity' => 'required|numeric',
            'order_items.*.total_price' => 'required|numeric',
            'payment_method' => 'required|in:Tunai,QRIS'
        ]);

        $order = \App\Models\Order::create([
            'transaction_time' => $request->transaction_time,
            'total_price' => (int) $request->total_price,
            'total_item' => (int) $request->total_item,
            'kasir_id' => (int) $request->kasir_id,
            'payment_method' => $request->payment_method
        ]);

        foreach ($request->order_items as $item){
            \App\Models\OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'total_price' => $item['total_price']
            ]);
        }

        if($order) {
            return response()->json([
                'success' => true,
                'message' => 'Order Created',
                'data' => $order
            ], 201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Order Failed to Save'
            ], 409);
        }
    }
}
