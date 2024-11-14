@extends('layouts.master')

@section('content')
    <div class="px-5 py-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1>Edit Data Barang</h1>
                </div>

                <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <hr>
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" id="kode" value="{{ old('kode', $barang->kode) }}"
                            class="form-control" placeholder="Masukkan Kode Barang">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $barang->name) }}"
                            class="form-control" placeholder="Masukkan Nama Barang">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" step="0.01" min="0.01"
                            value="{{ old('harga', $barang->harga) }}" class="form-control"
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
@endsection
