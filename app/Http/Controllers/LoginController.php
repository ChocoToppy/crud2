<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request){
        $validate = $request->validate([
            "email"=>"required|email:dns",
            "password"=>"required"
        ]);
        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            //dd('berhasil login');
            return redirect()->intended('/show-data-mahasiswa');
        }
        return back()->with('status-error','Email Atau Password Salah!');
        //dd('gagal login');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
