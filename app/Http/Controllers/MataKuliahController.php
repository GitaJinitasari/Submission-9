<?php

// app/Http/Controllers/MataKuliahController.php
namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = MataKuliah::all();
        return view('MataKuliah.index', compact('matakuliahs'));
    }

    public function create()
    {
        return view('MataKuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'sks' => 'required|numeric',
            // tambahkan validasi sesuai kebutuhan Anda
        ]);

        MataKuliah::create($request->all());

        return redirect()->route('matakuliahs.index')->with('success', 'Mata Kuliah berhasil ditambahkan');
    }

    public function show(MataKuliah $matakuliah)
    {
        return view('MataKuliah.show', compact('matakuliah'));
    }

    public function edit(MataKuliah $matakuliah)
    {
        return view('MataKuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, MataKuliah $matakuliah)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'sks' => 'required|numeric',
            // tambahkan validasi sesuai kebutuhan Anda
        ]);

        $matakuliah->update($request->all());

        return redirect()->route('matakuliahs.index')->with('success', 'Mata Kuliah berhasil diperbarui');
    }

    public function destroy(MataKuliah $matakuliah)
    {
        $matakuliah->delete();

        return redirect()->route('matakuliahs.index')->with('success', 'Mata Kuliah berhasil dihapus');
    }
}
