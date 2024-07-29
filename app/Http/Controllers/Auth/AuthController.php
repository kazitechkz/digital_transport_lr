<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function auth(Request $request)
    {
        $credentials = $this->validate($request, [
            "email" => "required|email",
            "password" => "required|max:225|min:4"
        ]);
        if (Auth::attempt($credentials)) {
            return redirect(route('dashboard.index'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
