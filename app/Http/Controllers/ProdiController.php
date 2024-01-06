<?php

// app/Http/Controllers/MataKuliahController.php
namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodis = Prodi::all();
        return view('Prodi.index', compact('prodis'));
    }

    public function create()
    {
        return view('Prodi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            // tambahkan validasi sesuai kebutuhan Anda
        ]);

        Prodi::create($request->all());

        return redirect()->route('prodis.index')->with('success', 'Prodi berhasil ditambahkan');
    }

    public function show(Prodi $prodi)
    {
        return view('Prodi.show', compact('prodi'));
    }

    public function edit(Prodi $prodi)
    {
        return view('Prodi.edit', compact('prodi'));
    }

    public function update(Request $request, Prodi $prodi)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            // tambahkan validasi sesuai kebutuhan Anda
        ]);

        $prodi->update($request->all());

        return redirect()->route('prodis.index')->with('success', 'Prodi berhasil diperbarui');
    }

    public function destroy(Prodi $prodi)
    {
        $prodi->delete();

        return redirect()->route('prodis.index')->with('success', 'Prodi berhasil dihapus');
    }
}
