@extends('layouts.master')

@section('content')
    @include('components.navbar')
    <div class="px-5 py-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1>Tambah Data Pelanggan</h1>
                </div>

                <form action="{{ route('pelanggan.store') }}" method="POST">
                    @csrf
                    <hr>
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" id="kode" class="form-control"
                            placeholder="Masukkan Kode Pelanggan" required>

                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control"
                            placeholder="Masukkan Nama Pelanggan" required>

                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Pelanggan" rows="3"
                            required></textarea>

                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>

                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                    </div>
                    <hr>
                    <div class="pt-3">
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>



            </div>
        </div>

    </div>
    @include('components.footer')
@endsection
