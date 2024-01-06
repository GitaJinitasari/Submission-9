<?php

// app/Http/Controllers/DosenController.php
namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('Dosen.index', ['dosens' => $dosens]);
    }

    public function create()
    {

        $matakuliah = \App\Models\MataKuliah::all();
        return view('Dosen.create', ['matakuliah' => $matakuliah]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:dosens,nip',
            'MataKuliah' => 'required'
            // tambahkan validasi sesuai kebutuhan Anda
        ]);

        Dosen::create($request->all());

        return redirect()->route('dosens.index')->with('success', 'Dosen berhasil ditambahkan');
    }

    public function show(Dosen $dosen)
    {
        return view('Dosen.show', compact('dosen'));
    }

    public function edit(Dosen $dosen)
    {
        $kecuali = [$dosen->MataKuliah];
        $matkuldosen = \App\Models\MataKuliah::where('kode', $dosen->MataKuliah)->first();
        $matakuliah = \App\Models\MataKuliah::whereNotIn('kode', $kecuali)->get();
        return view('Dosen.edit', compact('dosen', 'matakuliah', 'matkuldosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:dosens,nip,' . $dosen->id,
            'MataKuliah' => 'required'
            // tambahkan validasi sesuai kebutuhan Anda
        ]);

        $dosen->update($request->all());

        return redirect()->route('dosens.index')->with('success', 'Dosen berhasil diperbarui');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosens.index')->with('success', 'Dosen berhasil dihapus');
    }
}

