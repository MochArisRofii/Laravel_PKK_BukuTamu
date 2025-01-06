<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (auth('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/tamus');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }


    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function ViewTamus()
    {
        $tamus = Tamu::all();
        return view('admin.tamus', compact('tamus'));
    }
}
