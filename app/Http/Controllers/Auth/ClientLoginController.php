<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class ClientLoginController extends Controller
{

    public function dashboard()
    {
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();
        $setting = DB::table('settings')->first();
        $user = Auth::guard('web')->user();
        return view('client.dashboard')->with(compact('categories','setting','user'));
    }

    public function update(Request $request, $id)
    {

        // validar mail que no exista

        $email = $request->email;
        $email_count = DB::table('users')->where('id', '!=', $id)->where('email', $email)->where('status', 1)->count();
        if ($email_count > 0) {
            return redirect()->back()->with('error', 'El email ya existe');
        }

        if($request->password) {
            if($request->password != $request->password_confirmation) {
                return redirect()->back()->with('error', 'Las contraseñas no coinciden');
            }
            $data['password'] = Hash::make($request->password);
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'celular' => $request->celular,
            'direccion' => $request->direccion,
        ];



        $user = User::find($id);
        $user->update($data);
        return redirect()->back()->with('success', 'Perfil actualizado');
    }
    public function showLoginForm()
    {
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();
        $setting = DB::table('settings')->first();
        return view('auth.client-login')->with(compact('categories','setting'));
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->where('status', 1)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if (Hash::needsRehash($user->password)) {
                    $user->password = Hash::make($request->password);
                    $user->save();
                }
                Auth::guard('web')->login($user);
                return redirect()->intended('/client/dashboard');
            }
        }
        return back()->with('error', 'Credenciales incorrectas');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/login');
    }

    public function showRegisterForm()
    {
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();
         $setting = DB::table('settings')->first();
        return view('auth.client-register')->with(compact('categories','setting'));
    }

    public function register(Request $request)
    {
        // validar mail que no exista

        $email = $request->email;
        $email_count = DB::table('users')->where('email', $email)->count();
        if ($email_count > 0) {
            return redirect()->back()->with('error', 'El email ya existe');
        }

        if($request->password != $request->password_confirmation) {
            return redirect()->back()->with('error', 'Las contraseñas no coinciden');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => now()
        ]);
        Auth::guard('web')->login($user);
        return redirect()->intended('/client/dashboard');
    }

    public function mi_cuenta()
    {
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();
        $setting = DB::table('settings')->first();
        return view('client.mi_cuenta')->with(compact('categories','setting'));
    }

    public function mis_favoritos()
    {
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();
        $setting = DB::table('settings')->first();
        return view('client.mis_favoritos')->with(compact('categories','setting'));
    }


    public function lista_de_deseos()
    {
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();
        $setting = DB::table('settings')->first();
        return view('client.lista_de_deseos')->with(compact('categories','setting'));
    }

    public function mis_pedidos()
    {
        $categories = DB::table('categories')
            ->whereNotNull('parent_id')
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();
        $setting = DB::table('settings')->first();

        $orders = DB::table('orders')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->select(
                'orders.id',
                'users.name as user_name',
                DB::raw("DATE_FORMAT(orders.created_at, '%d/%m/%Y %H:%i') as fecha_formateada"),
                'orders.total',
                'orders.status'
            )
            ->orderBy('orders.created_at', 'desc')
            ->where('orders.user_id', Auth::guard('web')->user()->id)
            ->paginate(10);

        return view('client.mis_pedidos')->with(compact('categories','setting','orders'));
    }

}
