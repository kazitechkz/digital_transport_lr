<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function auth(Request $request)
    {
        $this->validate($request,[
            "email"=>"required|email",
            "password"=>"required|max:225|min:4"
        ]);
        dd($request->all());
    }
}
