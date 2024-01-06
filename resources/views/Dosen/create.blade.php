@extends('layouts.app')
@section('content')
<!-- resources/views/dosens/create.blade.php -->
<h1 class="text-center">Tambah Dosen</h1>

<form action="{{ route('dosens.store') }}" method="POST">
    @csrf
    <label class="form-label m-2" for="nip">NIP:</label>
    <input class="form-control m-2" type="text" name="nip" required>

    <label class="form-label m-2" for="nama">Nama:</label>
    <input class="form-control m-2" type="text" name="nama" required>

    <label class="form-label m-2" for="matkul">Matakuliah</label>
    <select name="MataKuliah" id="" class="form-select">
        <option selected disabled>Pilih</option>
        @if ($matakuliah->count() < 1)
        <option disabled>Matakuliah belum tersedia</option>
        @endif
        @foreach ( $matakuliah as $matkul )
            <option value="{{ $matkul->kode }}">{{ $matkul->nama }}</option>
        @endforeach
    </select>
    <!-- Tambahkan input sesuai kebutuhan Anda -->

    <button type="submit" class="btn btn-primary w-100 mt-5">Simpan</button>
</form>
@endsection
