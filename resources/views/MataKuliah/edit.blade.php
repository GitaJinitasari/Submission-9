@extends('layouts.app')
@section('content')
<!-- resources/views/matakuliahs/edit.blade.php -->
<h1 class="text-center">Edit Mata Kuliah</h1>

<form action="{{ route('matakuliahs.update', $matakuliah->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label class="form-label m-2" for="kode_mata_kuliah">Kode Mata Kuliah:</label>
    <input class="form-control m-2" type="text" name="kode" value="{{ $matakuliah->kode ?? old('kode') }}" required>

    <label class="form-label m-2" for="nama_mata_kuliah">Nama Mata Kuliah:</label>
    <input class="form-control m-2" type="text" name="nama" value="{{ $matakuliah->nama ?? old('nama') }}" required>

    <label class="form-label m-2" for="sks">SKS:</label>
    <input class="form-control m-2" type="number" name="sks" value="{{ $matakuliah->sks ?? old('sks') }}" required>

    <!-- Tambahkan input sesuai kebutuhan Anda -->

    <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
</form>
@endsection
