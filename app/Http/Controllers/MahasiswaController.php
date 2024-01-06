<?php

// app/Http/Controllers/MahasiswaController.php
namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('Mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        $prodi = \App\Models\Prodi::all();
        return view('Mahasiswa.create', compact('prodi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            // tambahkan validasi sesuai kebutuhan Anda
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('Mahasiswa.show', compact('mahasiswa'));
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $kecuali = [$mahasiswa->jurusan];
        $prodimhs = \App\Models\Prodi::where('kode', $mahasiswa->jurusan)->first();
        $prodi = \App\Models\Prodi::whereNotIn('kode', $kecuali)->get();
        return view('Mahasiswa.edit', compact('mahasiswa', 'prodimhs', 'prodi'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            // tambahkan validasi sesuai kebutuhan Anda
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil diperbarui');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil dihapus');
    }
}

