@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
<div class="col-md-12">
<h1 class="text-center">Daftar Mahasiswa</h1>
<a href="{{ route('mahasiswas.create') }}" class="btn btn-primary mt-2 mb-3">Tambah Mahasiswa</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-md-3">NIM</th>
            <th class="col-md-3">Nama</th>
            <th class="col-md-3">Jurusan/Prodi</th>
            <th class="col-md-3">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswas as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->jurusan }}</td>
                <td class="d-flex justify-content-between">
                    <a href="{{ route('mahasiswas.show', $mahasiswa->id) }}" class="btn btn-warning btn-sm">Detail</a>
                    <a href="{{ route('mahasiswas.edit', $mahasiswa->id) }}" class="btn btn-success btn-sm">Edit</a>
                    <form action="{{ route('mahasiswas.destroy', $mahasiswa->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
