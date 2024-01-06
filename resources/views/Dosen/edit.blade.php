@extends('layouts.app')
@section('content')
<!-- resources/views/dosens/edit.blade.php -->
<h1 class="text-center">Edit Dosen</h1>

<form action="{{ route('dosens.update', $dosen->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label class="form-label m-2" for="nip">NIP:</label>
    <input class="form-control m-2" type="text" name="nip" value="{{ $dosen->nip }}" required>

    <label class="form-label m-2" for="nama">Nama:</label>
    <input class="form-control m-2" type="text" name="nama" value="{{ $dosen->nama }}" required>

    <label class="form-label m-2" for="matkul">Matakuliah</label>
    <select name="MataKuliah" id="" class="form-select">
        <option selected disabled>Pilih</option>
        @if ($dosen->MataKuliah)
            <option value="{{ $matkuldosen->kode }}" selected>{{ $matkuldosen->nama }}</option>
        @endif
        @foreach ( $matakuliah as $matkul )
            <option value="{{ $matkul->kode }}">{{ $matkul->nama }}</option>
            @if ($dosen->MataKuliah == $matkul->kode)
            <option value="$matkul->kode" selected>{{ $matkul->nama }}</option>
            @endif
        @endforeach
    </select>

    <!-- Tambahkan input sesuai kebutuhan Anda -->

    <button type="submit" class="btn btn-primary w-100 mt-5">Simpan Perubahan</button>
</form>
@endsection
