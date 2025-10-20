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
        return view('client.dashboard')->with(compact('categories','setting'));
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
        $user = User::where('email', $request->email)->first();
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
        return back()->withErrors(['email' => 'Credenciales incorrectas']);
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => now()
        ]);
        Auth::guard('web')->login($user);
        return redirect()->intended('/client/dashboard');
    }
}
