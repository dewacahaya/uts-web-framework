@extends('layouts.master')

@section('content')
    @include('components.navbar')
    <div class="px-5 py-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1>Tambah Data Barang</h1>
                </div>

                <form action="{{ route('barang.store') }}" method="POST">
                    @csrf
                    <hr>
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" id="kode" class="form-control"
                            placeholder="Masukkan Kode Barang">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Masukkan Nama Barang">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control"
                            placeholder="Masukkan Harga Barang">
                    </div>
                    </hr>
                    <div class=" pt-3">
                        <a href="{{ route('barang.index') }}" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>


            </div>
        </div>

    </div>
    @include('components.footer')
@endsection
