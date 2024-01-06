@extends('layouts.app')
@section('content')
<!-- resources/views/matakuliahs/create.blade.php -->
<h1 class="text-center">Tambah Mata Kuliah</h1>

<form action="{{ route('matakuliahs.store') }}" method="POST">
    @csrf
    <label class="form-label m-2" for="kode_mata_kuliah">Kode Mata Kuliah:</label>
    <input class="form-control m-2" type="text" name="kode" required>

    <label class="form-label m-2" for="nama_mata_kuliah">Nama Mata Kuliah:</label>
    <input class="form-control m-2" type="text" name="nama" required>

    <label class="form-label m-2" for="sks">SKS:</label>
    <input class="form-control m-2" type="number" name="sks" required>

    <!-- Tambahkan input sesuai kebutuhan Anda -->

    <button type="submit" class="btn btn-primary w-100">Simpan</button>
</form>
@endsection
