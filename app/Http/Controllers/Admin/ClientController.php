<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        return view('admin.clients.index')->with(compact('users'));
    }

    public function store(Request $request){

        $email = $request->email;
        $email_count = DB::table('users')->where('email', $email)->count();
        if ($email_count > 0) {
            return redirect()->back()->with('error', 'El email ya existe. Por favor, elige otro.');
        }
        if($request->password != $request->password_confirmation) {
            return redirect()->back()->with('error', 'Las contraseñas no coinciden');
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'celular' => $request->celular,
            'direccion' => $request->direccion,
            'password' => Hash::make($request->password),
            'created_at' => now()
        ]);

        return redirect()->route('admin.clients.index')->with('success', 'Usuario creado exitosamente.');

    }

    public function update(Request $request, $id){

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'celular' => $request->celular,
            'direccion' => $request->direccion
        ];

        if($request->password != '') {
            if($request->password != $request->password_confirmation) {
                return redirect()->back()->with('error', 'Las contraseñas no coinciden');
            }
            $data['password'] = Hash::make($request->password);
        }

        DB::table('users')->where('id', $id)->update($data);

        return redirect()->route('admin.clients.index')->with('success', 'Cliente actualizado exitosamente.');
    }

    public function delete($id){
        DB::table('users')->where('id', $id)->update([
            'status' => 0
        ]);
        return redirect()->route('admin.clients.index')->with('success', 'Cliente eliminado exitosamente.');
    }

    public function updateStatus($id){
        $status = DB::table('users')->where('id', $id)->value('status');
        if ($status == 1) {
            DB::table('users')->where('id', $id)->update([
                'status' => 0
            ]);
            return redirect()->route('admin.clients.index')->with('success', 'Clientes desactivada exitosamente.');
        }else{
            DB::table('users')->where('id', $id)->update([
                'status' => 1
            ]);
            return redirect()->route('admin.clients.index')->with('success', 'Clientes activada exitosamente.');
        }
    }
}
