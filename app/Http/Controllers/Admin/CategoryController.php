<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function index(){
        $categories = DB::table('categories')
            ->whereNull('parent_id')
            ->get();

        $subcategories = DB::table('categories as categories')
            ->join ('categories as subcategories', 'categories.id', '=', 'subcategories.parent_id')
            ->select('categories.*','subcategories.id as subcategories_id','subcategories.status as subcategories_status', 
            'subcategories.name as subcategories_name', 'subcategories.id as subcategories_id', 'subcategories.slug as subcategories_slug')
            ->whereNotNull('subcategories.parent_id')
            ->orderBy('subcategories.name', 'ASC')
            ->get();
        return view('admin.categories.index')->with(compact('categories', 'subcategories'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $parent_id = 1;
        $existingSlug = DB::table('categories')->where('slug', $request->slug)->first();
        if ($existingSlug) {
            return redirect()->back()->with('error', 'El slug ya existe. Por favor, elige otro.');
        }   

        DB::table('categories')->insert([
            'name' => $request->name,
            'slug' => $request->slug,
            'parent_id' => $parent_id,
            'status' => 1,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Categoría creada exitosamente.');
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $existingSlug = DB::table('categories')
            ->where('slug', $request->slug)
            ->where('id', '!=', $id)
            ->first();

        if ($existingSlug) {
            return redirect()->back()->with('error', 'El slug ya existe. Por favor, elige otro.');
        }   

        DB::table('categories')->where('id', $id)->update([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Categoría actualizada exitosamente.');
    }

    public function delete($id){
        DB::table('categories')->where('id', $id)->update([
            'status' => 0,
        ]);
        return redirect()->route('admin.categories.index')->with('success', 'Categoría eliminada exitosamente.');
    }

    public function updateStatus($id){
        $category = DB::table('categories')->where('id', $id)->first();
        $newStatus = $category->status == 1 ? 0 : 1;

        DB::table('categories')->where('id', $id)->update([
            'status' => $newStatus,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Estado de la categoría actualizado exitosamente.');
    }
}
