@extends('layouts.master')

@section('content')
    @include('components.navbarp')
    <div class="px-5 py-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1>Edit Data Pelanggan</h1>
                </div>

                <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <hr>
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" id="kode" value="{{ old('kode', $pelanggan->kode) }}"
                            class="form-control" placeholder="Masukkan Kode Pelanggan">
                        <label for="name">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{ old('name', $pelanggan->nama) }}"
                            class="form-control" placeholder="Masukkan Nama Pelanggan">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" value="{{ old('alamat', $pelanggan->alamat) }}"
                            class="form-control" placeholder="Masukkan Alamat Pelanggan">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="L"
                                {{ old('jenis_kelamin', $pelanggan->jenis_kelamin) == 'L' ? 'selected' : '' }}>
                                Laki-laki</option>
                            <option value="P"
                                {{ old('jenis_kelamin', $pelanggan->jenis_kelamin) == 'P' ? 'selected' : '' }}>
                                Perempuan</option>
                        </select>
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                            value="{{ old('tanggal_lahir', $pelanggan->tanggal_lahir) }}" class="form-control"
                            placeholder="Masukkan Tanggal Lahir">
                    </div>
                    </hr>
                    <div class=" pt-3">
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
