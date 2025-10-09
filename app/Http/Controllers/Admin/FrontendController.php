<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FrontendController extends Controller
{
    public function sliders()
    {
        $sliders = DB::table('sliders')->where('status',1)->get();
        return view('admin.frontend.sliders.index')->with(compact('sliders'));
    }

    public function storeSliders(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $imageName = time().'.'.$request->imagen->extension();
                $request->imagen->move(public_path('template_admin/images/sliders'), $imageName);
                DB::table('sliders')->insert([
                    'titulo' => $request->titulo,
                    'imagen' => $imageName,
                    'status' => 1,
                    'created_at' => now()
                ]);
                return redirect()->route('admin.frontend.sliders')->with('success', 'Slider creado exitosamente');
            } else {
                return redirect()->back()->with('error', 'Error al subir el slider')->withInput();
            }
        } else {
            return redirect()->back()->with('error', 'No se ha seleccionado ninguna imagen')->withInput();
        }
    }

    public function updateSlider(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = [
            'titulo' => $request->titulo,
            'updated_at' => now()
        ];

        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $imageName = time().'.'.$request->imagen->extension();
                $request->imagen->move(public_path('template_admin/images/sliders'), $imageName);
                $data['imagen'] = $imageName;
            } else {
                return redirect()->back()->with('error', 'Error al subir el slider')->withInput();
            }
        }

        DB::table('sliders')->where('id', $id)->update($data);
        return redirect()->route('admin.frontend.sliders')->with('success', 'Slider actualizado exitosamente');
    }

    public function deleteSlider($id)
    {
        DB::table('sliders')->where('id', $id)->update(['status' => 0, 'updated_at' => now()]);
        return redirect()->route('admin.frontend.sliders')->with('success', 'Slider eliminado exitosamente');
    }
}
