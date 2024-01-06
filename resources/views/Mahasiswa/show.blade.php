@extends('layouts.app')
@section('content')
<!-- resources/views/matakuliahs/show.blade.php -->
<div class="card">
  <div class="card-header">
    <h1 class="text-center">Detail Mahasiswa</h1>
  </div>
  <div class="card-body text-center">
    <h5 class="card-title">NIM: {{ $mahasiswa->nim }}</h5>
    <p class="card-text">Nama: {{ $mahasiswa->nama }}</p>
    <p class="card-text">Jurusan: {{ $mahasiswa->jurusan }}</p>
    <a href="{{ route('mahasiswas.index') }}" class="btn btn-primary">Kembali</a>
  </div>
</div>

@endsection
