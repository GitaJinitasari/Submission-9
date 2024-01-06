<!-- resources/views/dosens/show.blade.php -->
@extends('layouts.app')
@section('content')
<!-- resources/views/matakuliahs/show.blade.php -->
<div class="card">
  <div class="card-header">
    <h1 class="text-center">Detail Dosen</h1>
  </div>
  <div class="card-body text-center">
    <h5 class="card-title">Nip: {{ $dosen->nip }}</h5>
    <p class="card-text">Nama: {{ $dosen->nama }}</p>
    <p class="card-text">Kode Matakuliah: {{ $dosen->MataKuliah }}</p>
    <a href="{{ route('dosens.index') }}" class="btn btn-primary">Kembali</a>
  </div>
</div>

@endsection
