@extends('layouts.app')
@section('content')




    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Mahasiswa</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>

        <div class="card-body">

            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_mahasiswa">Nama Mahasiswa</label>
                    <input type="text" class="form-control" value="{{ $mahasiswa->nama_mahasiswa }}" id="nama_mahasiswa"
                        name="nama_mahasiswa" placeholder="Masukkan Nama mahasiswa">
                    @error('nama_mahasiswa')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" value="{{ $mahasiswa->kode_fakultas }}" id="nim"
                        name="kode_mahasiswa" placeholder="Masukkan Nim">
                    @error('nim')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="fakultas_id"> Fakultas</label>
                    <select class="form-control" name="fakultas_id" id="fakultas_id">
                        <option value="{{ $mahasiswa->fakultas->id}}">{{ $mahasiswa->fakultas->nama_fakultas}}</option>
                        @foreach ($fakultas as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_fakultas }}</option>

                        @endforeach
                    </select>
                </div>
                <div class="form-program">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>




@endsection