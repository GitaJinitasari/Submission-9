@extends('layouts.app')
@section('content')
<!-- resources/views/matakuliahs/show.blade.php -->
<div class="card">
  <div class="card-header">
    <h1 class="text-center">Detail Mata Kuliah</h1>
  </div>
  <div class="card-body text-center">
    <h5 class="card-title">Kode Mata Kuliah: {{ $matakuliah->kode }}</h5>
    <p class="card-text">Nama Mata Kuliah: {{ $matakuliah->nama }}</p>
    <p class="card-text">SKS: {{ $matakuliah->sks }}</p>
    <a href="{{ route('matakuliahs.index') }}" class="btn btn-primary">Kembali</a>
  </div>
</div>

@endsection
