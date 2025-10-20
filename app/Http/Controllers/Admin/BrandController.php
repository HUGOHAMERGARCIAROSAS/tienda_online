<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BrandController extends Controller
{
    public function index(){
        $brands = DB::table('brands')->where('status', '1')->get();
        return view('admin.brand.index')->with(compact('brands'));
    }

    public function store(Request $request){


        if ($request->hasFile('image')) {
            $image = time(). '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('template_admin/images/brands'), $image);
            DB::table('brands')->insert([
                'name' => $request->name,
                'url' => 'template_admin/images/brands/'.$image,
                'status' => 1
            ]);
            return redirect()->route('admin.brands.index')->with('success', 'Marca creada exitosamente.');
        }

        return  redirect()->route('admin.brands.index')->with('error', 'No se pudo crear la marca.');
        
    }

    public function update(Request $request, $id){
        if ($request->hasFile('image')) {
            $image = time(). '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('template_admin/images/brands'), $image);
            DB::table('brands')->where('id', $id)->update([
                'name' => $request->name,
                'url' => 'template_admin/images/brands/'.$image
            ]);
            return redirect()->route('admin.brands.index')->with('success', 'Marca actualizada exitosamente.');
        }else{
            DB::table('brands')->where('id', $id)->update([
                'name' => $request->name
            ]);
        }
        return redirect()->route('admin.brands.index')->with('success', 'Marca actualizada exitosamente.');
    }

    public function delete($id){
        DB::table('brands')->where('id', $id)->update([
            'status' => 0
        ]);
        return redirect()->route('admin.brands.index')->with('success', 'Marca eliminada exitosamente.');
    }

    public function updateStatus($id){
        $status = DB::table('brands')->where('id', $id)->value('status');
        if ($status == 1) {
            DB::table('brands')->where('id', $id)->update([
                'status' => 0
            ]);
            return redirect()->route('admin.brands.index')->with('success', 'Marca desactivada exitosamente.');
        }else{
            DB::table('brands')->where('id', $id)->update([
                'status' => 1
            ]);
            return redirect()->route('admin.brands.index')->with('success', 'Marca activada exitosamente.');
        }
    }
}
