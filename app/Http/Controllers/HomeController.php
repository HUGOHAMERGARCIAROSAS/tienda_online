<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = DB::table('sliders')->where('status',1)->get();
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status',1)
            ->orderBy('name', 'ASC')
            ->get();
        $productos_destacados = DB::table('products')
            // ->join('product_images', 'products.id', '=', 'product_images.product_id')
            ->where('is_featured', 1)
            ->where('status', 1)
            ->limit(20)
            ->get();
        $brands = DB::table('brands')->where('status',1)->get();
        $setting = DB::table('settings')->first();
        return view('welcome')->with(compact('sliders','categories','productos_destacados','brands','setting'));
    }

    public function showCategories($slug)
    {

        $category = DB::table('categories')->where('slug', $slug)->first();
        if (!$category) {
            return redirect()->route('home')->with('error', 'Categoría no encontrada.');
        }

        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();


        $products = DB::table('products')
            // ->join('product_images', 'products.id', '=', 'product_images.product_id')
            ->where('category_id', $category->id)
            ->where('status', 1)
            ->get();

        $setting = DB::table('settings')->first();

        return view('frontend.categories.show')->with(compact('category', 'categories', 'slug', 'products','setting'));
    }

    public function showProducts($slug)
    {
        $product = DB::table('products')
        // ->join ('product_images', 'products.id', '=', 'product_images.product_id')
        ->where('slug', $slug)->first();
        if (!$product) {
            return redirect()->route('home')->with('error', 'Producto no encontrado.');
        }

        $product_images = DB::table('product_images')->where('product_id', $product->id)->get();

        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();

        $category = DB::table('categories')->where('id', $product->category_id)->first();
        $setting = DB::table('settings')->first();

        return view('frontend.products.show')->with(compact('product', 'categories', 'slug', 'category', 'product_images','setting'));
    }

    public function cart()
    {
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();
            $setting = DB::table('settings')->first();
        return view('frontend.orders.show')->with(compact('categories','setting'));
    }

    public function cartStore(Request $request)
    {
        try {
            DB::beginTransaction();

            if (!auth()->check()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Usuario no autenticado',
                ], 401);
            }


            $orderId = DB::table('orders')->insertGetId([
                'user_id' => auth()->id(),
                'status' => 'pending',
                'total' => $request->total,
                'grand_total' => $request->total,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $data = $request->all();

            if (empty($data['cart']) || !is_array($data['cart'])) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Carrito vacío o formato inválido',
                ], 400);
            }

            $insertedCount = 0;
            $skipped = [];

            foreach ($data['cart'] as $item) {
                $product = DB::table('products')
                    ->where('id', $item['id'])
                    ->where('status', 1)
                    ->first();

                if (!$product) {
                    $skipped[] = $item['id'];
                    continue;
                }

                DB::table('order_items')->insert([
                    'order_id' => $orderId,
                    'product_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                    'discount' => 0,
                    'subtotal' => $item['price'] * $item['quantity'],
                ]);

                $insertedCount++;
            }

            DB::commit();

            if ($insertedCount === 0) {
                DB::table('orders')->where('id', $orderId)->delete();

                return response()->json([
                    'status' => 'error',
                    'message' => 'Ningún producto activo. No se creó la orden.',
                    'skipped_products' => $skipped,
                ], 400);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Pedido realizado exitosamente',
                'order_id' => $orderId,
                'skipped_products' => $skipped,
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message' => 'Error al procesar el pedido: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function pedido_exitoso($id){
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();

        $setting = DB::table('settings')->first();


        $order = DB::table('orders')
            ->where('orders.id', $id)
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.*', 'users.name as user_name')
            ->first();

        $items = DB::table('order_items')
            ->join('products', 'products.id', '=', 'order_items.product_id')
            ->where('order_items.order_id', $id)
            ->select('products.name', 'order_items.quantity', 'order_items.price', 'order_items.subtotal')
            ->get();

        if (!$order) {
            abort(404, 'Pedido no encontrado');
        }

        return view('frontend.orders.pedido_exitoso')->with(compact('categories','setting','id','order','items'));
    }

    public function checkout(){
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();
            $setting = DB::table('settings')->first();
            if (!auth()->check()) {
                return redirect()->route('login')->with(compact('categories','setting'));
            }

        return view('frontend.orders.checkout')->with(compact('categories','setting'));
    }

    public function suscriptores(Request $request){

        $existingEmail = DB::table('suscriptores')->where('email', $request->email)->first();
        if ($existingEmail) {
            return response()->json([
                'status' => 'error',
                'message' => 'El email ya existe'
            ]);
        }

        DB::table('suscriptores')->insert([
            'email' => $request->email,
            'created_at' => now()
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Gracias por suscribirte'
        ]);
    }

    public function nosotros(){
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();

        $setting = DB::table('settings')->first();
        return view('frontend.nosotros.index')->with(compact('categories','setting'));
    }

    public function categories(){
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status',1)
            ->orderBy('name', 'ASC')
            ->get();
            $setting = DB::table('settings')->first();
        return view('frontend.category.index')->with(compact('categories','setting'));
    }

    public function featured_products(){
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status',1)
            ->orderBy('name', 'ASC')
            ->get();
            $setting = DB::table('settings')->first();
        $products = DB::table('products')
            // ->join('product_images', 'products.id', '=', 'product_images.product_id')
            ->where('is_featured', 1)
            ->where('status', 1)
            ->get();
        return view('frontend.featured_products.index')->with(compact('categories','setting','products'));
    }

    public function new_products(){
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status',1)
            ->orderBy('name', 'ASC')
            ->get();
            $setting = DB::table('settings')->first();

        $products = DB::table('products')
            // ->join('product_images', 'products.id', '=', 'product_images.product_id')
            ->where('is_new', 1)
            ->where('status', 1)
            ->get();
        return view('frontend.new_products.index')->with(compact('categories','setting','products'));
    }

}
