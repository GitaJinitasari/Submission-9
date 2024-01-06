@extends('layouts.app')
@section('content')
<!-- resources/views/matakuliahs/create.blade.php -->
<h1 class="text-center">Tambah Prodi</h1>

<form action="{{ route('prodis.store') }}" method="POST">
    @csrf
    <label class="form-label m-2" for="kode_mata_kuliah">Kode Prodi:</label>
    <input class="form-control m-2" type="text" name="kode" required>

    <label class="form-label m-2" for="nama_mata_kuliah">Nama Prodi:</label>
    <input class="form-control m-2" type="text" name="nama" required>

    <!-- Tambahkan input sesuai kebutuhan Anda -->

    <button type="submit" class="btn btn-primary w-100">Simpan</button>
</form>
@endsection
