    @extends('layouts.app')

    @section('content')

                    <!-- Page Heading -->
                    <h1 class="h2 mb-2 text-gray-800">Tambah Fakultas</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Fakultas</h6>
                        </div>
                    <form action="{{ route('fakultas.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                        <label for="nama_fakultas">Nama Fakultas</label>
                        <input type="text" class="form-control" id="nama_fakultas" name="nama_fakultas" placeholder="masukkan nama fakultas">
                        
                        @error('nama_fakultas')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror    
                    </div>
                        <div class="form-group">
                        <label for="kode_fakultas">Kode Fakultas</label>
                        <input type="text" class="form-control" id="kode_fakultas" name="kode_fakultas" placeholder="masukkan kode fakultas">
                        
                        @error('kode_fakultas')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror        
                    </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>

                    </form>

                    
                    </div>


    @endsection