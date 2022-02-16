<?php

namespace App\Http\Controllers\Manager\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('dashboard.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->guard('manager')->attempt($credentials)) {
            $request->session()->regenerateToken();

            return redirect()->route('manager.dashboard');
        }

        return back()->withErrors([
            'email' => 'Mật khẩu hoặc tài khoản không đúng'
        ]);
    }
}
