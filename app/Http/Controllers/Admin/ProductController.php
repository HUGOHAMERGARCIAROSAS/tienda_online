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

    public function store(Request $request){

        // validar slug

        $slug = $request->slug;
        $slug_count = DB::table('products')->where('slug', $slug)->count();
        if ($slug_count > 0) {
            return response()->json([
                'status' => 'error',
                'message' => 'El slug ya existe'
            ]);
        }
        
        $id = DB::table('products')->insertGetId([
            'category_id' => $request->category,
            'name' => $request->name,
            'slug' => $request->slug,
            'price' => $request->precio,
            'description' => $request->description,
            'discount_price' => $request->precio_descuento,
            'sku' => $request->sku,
            'status' => $request->status,
            'is_featured' => $request->is_featured,
            'is_new' => $request->is_new,
            'is_offer' => $request->is_offer,
            'created_at' => now()
        ]);

        if(!$id){ 
            return response()->json([
                'status' => 'error',
                'message' => 'Error al crear el producto'
            ]);
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key=>$file) {
                $image = time(). '_' . $file->getClientOriginalName();
                $file->move(public_path('template_admin/images/product'), $image);

                if($key==0){
                    DB::table('products')->where('id', $id)->update([
                        'url' => 'template_admin/images/product/' . $image
                    ]);
                }

                DB::table('product_images')->insert([
                    'product_id' => $id,
                    'url' => 'template_admin/images/product/' . $image,
                    'created_at' => now(),
                    'is_primary' => 0
                ]);
            }
        }


        return response()->json([
            'status' => 'success'
        ]);
    }
}
