@extends('layouts.app')
@section('content')




<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Prodi</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
</div>

<div class="card-body">

<form action="{{ route('prodi.store') }}" method="post">
    @csrf
<div class="form-group">
    <label for="nama_prodi">Nama Prodi</label>
    <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" placeholder="Masukkan Nama Prodi">
    @error('nama_prodi')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <label for="kode_prodi">kode Prodi</label>
    <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" placeholder="Masukkan Kode Prodi">
    @error('kode_Prodi')
        <small class="text-danger">{{$message}}</small>
    @enderror
    </div>
</div>

<div class="form-program">
    <button type="submit" class="btn btn-primary">Tambah</button>
</div>


@endsection