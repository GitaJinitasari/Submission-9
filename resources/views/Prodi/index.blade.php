<!-- resources/views/prodis/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
<div class="col-md-12">
<h1 class="text-center">Daftar Prodi</h1>

<a href="{{ route('prodis.create') }}" class="btn btn-primary mt-2 mb-3">Tambah Prodi</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-md-4">Kode Prodi</th>
            <th class="col-md-4">Nama Prodi</th>
            <th class="col-md-4">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($prodis as $prodi)
            <tr>
                <td>{{ $prodi->kode }}</td>
                <td>{{ $prodi->nama }}</td>
                <td class="d-flex justify-content-between">
                    <a href="{{ route('prodis.show', $prodi->id) }}" class="btn btn-warning btn-sm">Detail</a>
                    <a href="{{ route('prodis.edit', $prodi->id) }}" class="btn btn-success btn-sm">Edit</a>
                    <form action="{{ route('prodis.destroy', $prodi->id) }}" method="POST">
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
