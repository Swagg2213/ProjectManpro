<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.loginAdmin');
    }

    function loginPost(Request $request) {
        $request->validate([
            "username"=>"required",
            "password"=>"required",
        ]);
        $credentials = $request->only("username", "password");
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route("index"));
        }

        return back()->with('loginError', 'login failed!');
    }
    public function register() {
        return view('admin.RegistrationAdmin');
    }
    function regisPost(Request $request) {
        $request->validate([
            "nama"=>"required",
            "username"=>"required",
            "password"=>"required",
        ]);


        $user = new User();
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        if($user->save()){
            return redirect(route("login.post"))->with("success","admin telah ditambahkan");
        }

        return redirect(route("registrasi"))->with("error","registrasi gagal");
    }
}
