@extends('layouts.app')
@section('content')
<!-- resources/views/mahasiswas/edit.blade.php -->
<h1 class="text-center">Edit Mahasiswa</h1>

<form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label class="form-label m-2" for="nim">NIM:</label>
    <input class="form-control m-2" type="text" name="nim" value="{{ $mahasiswa->nim }}" required>

    <label class="form-label m-2" for="nama">Nama:</label>
    <input class="form-control m-2" type="text" name="nama" value="{{ $mahasiswa->nama }}" required>

    <label class="form-label m-2" for="matkul">Jurusan</label>
    <select name="jurusan" id="" class="form-select">
        <option selected disabled>Pilih</option>
        @if ($mahasiswa->jurusan)
            <option value="{{ $prodimhs->kode }}" selected>{{ $prodimhs->nama }}</option>
        @endif
        @foreach ( $prodi as $matkul )
            <option value="{{ $prod->kode }}">{{ $prod->nama }}</option>
            @if ($mahasiswa->jurusan == $prod->kode)
            <option value="$prod->kode" selected>{{ $prod->nama }}</option>
            @endif
        @endforeach
    </select>

    <!-- Tambahkan input sesuai kebutuhan Anda -->

    <button type="submit" class="btn btn-primary w-100 mt-5">Simpan Perubahan</button>
</form>
@endsection
