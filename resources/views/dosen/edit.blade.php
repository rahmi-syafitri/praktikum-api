@extends('layouts.app')
@section('content')




    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Dosen</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>

        <div class="card-body">

            <form action="{{ route('dosen.update', $dosen->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_dosen">Nama Dosen</label>
                    <input type="text" class="form-control" value="{{ $dosen->nama_dosen }}" id="nama_dosen"
                        name="nama_dosen" placeholder="Masukkan Nama dosen">
                    @error('nama_dosen')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nidn">NIDN</label>
                    <input type="text" class="form-control" value="{{ $dosen->kode_fakultas }}" id="nidn"
                        name="nidn" placeholder="Masukkan Nidn">
                    @error('nidn')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="fakultas_id"> Fakultas</label>
                    <select class="form-control" name="fakultas_id" id="fakultas_id">
                        <option value="{{ $dosen->fakultas->id}}">{{ $dosen->fakultas->nama_fakultas}}</option>
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