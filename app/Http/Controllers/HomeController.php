<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        return view('welcome')->with(compact('sliders','categories','productos_destacados'));
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

        return view('frontend.categories.show')->with(compact('category', 'categories', 'slug', 'products'));
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

        return view('frontend.products.show')->with(compact('product', 'categories', 'slug', 'category', 'product_images'));
    }

    public function cart()
    {
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();
        return view('frontend.orders.show')->with(compact('categories'));
    }

}
