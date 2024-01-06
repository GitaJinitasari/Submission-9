@extends('layouts.app')
@section('content')
<!-- resources/views/matakuliahs/index.blade.php -->

<div class="row justify-content-center">
<div class="col-md-12">
<h1 class="text-center">Daftar Mata Kuliah</h1>
<a href="{{ route('matakuliahs.create') }}" class="btn btn-primary mt-2 mb-3">Tambah Mata Kuliah</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-md-3">Kode Mata Kuliah</th>
            <th class="col-md-3">Nama Mata Kuliah</th>
            <th class="col-md-3">SKS</th>
            <th class="col-md-5">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($matakuliahs as $matakuliah)
            <tr>
                <td>{{ $matakuliah->kode }}</td>
                <td>{{ $matakuliah->nama }}</td>
                <td>{{ $matakuliah->sks }}</td>
                <td class="d-flex justify-content-between">
                    <a href="{{ route('matakuliahs.show', $matakuliah->id) }}" class="btn btn-warning btn-sm">Detail</a>
                    <a href="{{ route('matakuliahs.edit', $matakuliah->id) }}" class="btn btn-success btn-sm">Edit</a>
                    <form action="{{ route('matakuliahs.destroy', $matakuliah->id) }}" method="POST">
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
