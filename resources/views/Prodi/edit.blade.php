@extends('layouts.app')
@section('content')
<!-- resources/views/matakuliahs/edit.blade.php -->
<h1 class="text-center">Edit Prodi Kuliah</h1>

<form action="{{ route('prodis.update', $prodi->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="kode_mata_kuliah">Kode Mata Kuliah:</label>
    <input class="form-control m-2" type="text" name="kode" value="{{ $prodi->kode ?? old('kode') }}" required>

    <label for="nama_mata_kuliah">Nama Mata Kuliah:</label>
    <input class="form-control m-2" type="text" name="nama" value="{{ $prodi->nama ?? old('nama') }}" required>


    <!-- Tambahkan input sesuai kebutuhan Anda -->

    <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
</form>
@endsection
