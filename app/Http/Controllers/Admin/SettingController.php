<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SettingController extends Controller
{
    public function index(){
        $setting = DB::table('settings')->first();
        return view('admin.setting.index')->with(compact('setting'));
    }

    public function update(Request $request, $id){
        $data = [
            'email' => $request->email ?? '#',
            'celular' => $request->celular ?? '#',
            'whatsapp' => $request->whatsapp ?? '#',
            'messenger' => $request->messenger ?? '#',
            'facebook' => $request->facebook ?? '#',
            'twitter' => $request->twitter ?? '#',
            'instagram' => $request->instagram ?? '#',
            'pinterest' => $request->pinterest ?? '#',
            'vimeo' => $request->vimeo ?? '#',
            'youtube' => $request->youtube ?? '#',
            'descripcion' => $request->descripcion ?? '#',
        ];

        if($request->hasFile('url')) {
            $image = time(). '_' . $request->file('url')->getClientOriginalName();
            $request->file('url')->move(public_path('template_admin/images/settings'), $image);
            $data['url'] = 'template_admin/images/settings/'.$image;
        }

        DB::table('settings')->where('id', $id)->update($data);
        return redirect()->route('admin.settings.index')->with('success', 'Configuraciones actualizadas exitosamente.');
    }
}
