<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
}

