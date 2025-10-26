<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){
        $orders = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->select(
            'orders.*',
            'users.name as user_name'
        )
        ->orderBy('orders.id', 'desc')
        ->get();
        return view('admin.orders.index')->with(compact('orders'));
    }

    public function edit($id){
        $order = DB::table('orders')
        ->where('orders.id', $id)
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->select('orders.*', 'users.name as user_name','users.email as user_email','users.celular as user_celular','users.direccion as user_direccion')
        ->first();

        if ($order && $order->created_at) {
            $order->created_at = \Carbon\Carbon::parse($order->created_at)
                ->format('d/m/Y H:i');
        }

        $order_items = DB::table('order_items')
        ->join('products', 'products.id', '=', 'order_items.product_id')
        ->where('order_items.order_id', $id)
        ->select(
            'order_items.*',
            'products.name as product_name',
            'products.price as product_price'
        );

        return response()->json([
            'status' => 'success',
            'order' => $order,
            'order_items' => $order_items->get()
        ]);
    }

}
