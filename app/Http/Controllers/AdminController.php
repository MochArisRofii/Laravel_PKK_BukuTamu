<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function edit($id)
    {
        // Mengambil data tamu berdasarkan id
        $tamus = Tamu::findOrFail($id);

        // Menampilkan form edit dengan data tamu
        return view('admin.edit', compact('tamus'));
    }
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'noktp' => 'required|string|max:20|unique:tamus,noktp,' . $id,
            'nohp' => 'required|string|max:20',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        // Menemukan data tamu berdasarkan id
        $tamu = Tamu::findOrFail($id);

        // Mengupdate data tamu
        $tamu->update($validatedData);

        // Redirect setelah update
        return redirect()->route('admin.tamu')->with('success', 'Data tamu berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Menemukan data tamu berdasarkan id
        $tamu = Tamu::findOrFail($id);

        // Menghapus data tamu
        $tamu->delete();

        // Redirect setelah delete
        return redirect()->route('admin.tamu')->with('success', 'Data tamu berhasil dihapus');
    }

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
            return redirect()->intended(route('admin.dashboard'));  // Pastikan ini sudah benar
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

        return redirect()->route('admin.login');  // Pastikan redirect menuju halaman login
    }


    public function ViewTamus()
    {
        $tamus = Tamu::all();
        return view('admin.tamu', compact('tamus'));
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
