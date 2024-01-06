@extends('layouts.app')
@section('content')
<!-- resources/views/mahasiswas/create.blade.php -->
<h1 class="text-center">Tambah Mahasiswa</h1>

<form action="{{ route('mahasiswas.store') }}" method="POST">
    @csrf
    <label class="form-label m-2" for="nim">NIM:</label>
    <input class="form-control m-2" type="text" name="nim" required>

    <label class="form-label m-2" for="nama">Nama:</label>
    <input class="form-control m-2" type="text" name="nama" required>

    <label class="form-label m-2" for="matkul">Jurusan</label>
    <select name="jurusan" id="" class="form-select">
        <option selected disabled>Pilih</option>
        @if ($prodi->count() < 1)
        <option disabled>Prodi belum tersedia</option>
        @endif
        @foreach ( $prodi as $jurusan )
            <option value="{{ $jurusan->kode }}">{{ $jurusan->nama }}</option>
        @endforeach
    </select>

    <!-- Tambahkan input sesuai kebutuhan Anda -->

    <button type="submit" class="btn btn-primary w-100 mt-5">Simpan</button>
</form>
@endsection
