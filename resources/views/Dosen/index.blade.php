<!-- resources/views/dosens/index.blade.php -->
@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-12">
<h1 class="text-center">Daftar Dosen</h1>
<a href="{{ route('dosens.create') }}" class="btn btn-primary mt-2 mb-3">Tambah Dosen</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-md-3">NIP</th>
            <th class="col-md-3">Nama</th>
            <th class="col-md-3">Kode Matakuliah</th>
            <th class="col-md-3">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dosens as $dosen)
            <tr>
                <td>{{ $dosen->nip }}</td>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->MataKuliah }}</td>
                <td class="d-flex justify-content-between">
                    <a href="{{ route('dosens.show', $dosen->id) }}" class="btn btn-warning btn-sm">Detail</a>
                    <a href="{{ route('dosens.edit', $dosen->id) }}" class="btn btn-success btn-sm">Edit</a>
                    <form action="{{ route('dosens.destroy', $dosen->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
@endsection
