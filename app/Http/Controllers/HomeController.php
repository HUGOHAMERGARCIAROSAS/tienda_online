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
        return view('welcome')->with(compact('sliders','categories'));
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

        return view('frontend.categories.show')->with(compact('category', 'categories', 'slug'));
    }

    public function showProducts($slug)
    {
        $product = DB::table('products')->where('slug', $slug)->first();
        if (!$product) {
            return redirect()->route('home')->with('error', 'Producto no encontrado.');
        }

        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();

        return view('frontend.products.show')->with(compact('product', 'categories', 'slug'));
    }

}
