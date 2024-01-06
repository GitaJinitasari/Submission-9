<!-- resources/views/matakuliahs/show.blade.php -->
@extends('layouts.app')
@section('content')
<!-- resources/views/matakuliahs/show.blade.php -->
<div class="card">
  <div class="card-header">
    <h1 class="text-center">Detail Prodi</h1>
  </div>
  <div class="card-body text-center">
    <h5 class="card-title">Kode Prodi: {{ $prodi->kode }}</h5>
    <p class="card-text">Nama Prodi: {{ $prodi->nama }}</p>
    <a href="{{ route('prodis.index') }}" class="btn btn-primary">Kembali</a>
  </div>
</div>
@endsection
