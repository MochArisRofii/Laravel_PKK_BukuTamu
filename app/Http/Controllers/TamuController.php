<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tamus = Tamu::all();
        return view('tamu.index', compact('tamus'));
    }

    public function verifikasi()
    {
        return view('tamu.verifikasi');
    }

    public function search(Request $request)
    {
        $tamu = Tamu::where('nama', 'like', '%' . $request->cari . '%')->get();
        return view('admin.tamu.index', compact('tamu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view(view: 'tamu.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'noktp' => 'required|string|max:20|unique:tamus,noktp', // Validasi noktp harus unik
            'nohp' => 'required|string|max:20', // Validasi nomor hp
            'nama' => 'required|string|max:255', // Validasi nama tamu
            'alamat' => 'required|string', // Validasi alamat tamu
        ]);

        // Menyimpan data tamu ke database
        Tamu::create($validatedData);

        // Redirect setelah sukses, memberi pesan
        return redirect()->route('tamu.verifikasi')->with('Berhasil', 'Data Tamu Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tamu $tamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tamu $tamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tamu $tamu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tamu $tamu)
    {
        //
    }
}
