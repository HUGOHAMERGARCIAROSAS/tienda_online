<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        return view('admin.products.index');
    }

    public function getData(Request $request){
        
        $consulta = DB::table('products')->select('id', 'name', 'price', 'discount_price', 'sku', 'status', 'created_at');
        if (!empty($request->name)) {
            $consulta->where('name', 'LIKE', '%' . $request->name . '%');
        }
        if (!empty($request->sku)) {
            $consulta->where('sku', 'LIKE', '%' . $request->sku . '%');
        }
        $totalData = $consulta->count();
        $totalFiltered = $totalData;
        $start = $request->start;
        $length = $request->length;
        $products = $consulta
            ->offset($start)
            ->limit($length)
            ->get();
        $data = [];
        foreach ($products as $product) {
            $data[] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'discount_price' => $product->discount_price,
                'sku' => $product->sku,
                'status' => $product->status,
                'created_at' => $product->created_at,
                'acciones' => '',
            ];
        }

        return response()->json([
            "draw" => intval($request->draw),
            "recordsTotal" => $totalData,
            "recordsFiltered" => $totalFiltered,
            "data" => $data,
        ]);

    }

    public function create(){
        $categories = DB::table('categories')
            ->whereNotNull('categories.parent_id')
            ->where('categories.status', 1)
            ->where('categories.parent_id', 1)
            ->orderBy('categories.name', 'ASC')
            ->get();
        return view('admin.products.create')->with(compact('categories'));
    }
}
