@extends('layouts.master')

@section('content')
    @include('components.navbar')
    <div class="px-5 py-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1>Detail Data Pelanggan</h1>
                </div>
                <hr>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Kode </th>
                            <th>:</th>
                            <th>{{ $pelanggan->kode }}</th>
                        </tr>
                        <tr>
                            <th>Nama </th>
                            <th>:</th>
                            <th>{{ $pelanggan->nama }}</th>
                        </tr>
                        <tr>
                            <th>Alamat </th>
                            <th>:</th>
                            <th>{{ $pelanggan->alamat }}</th>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin </th>
                            <th>:</th>
                            <th>{{ $pelanggan->jenis_kelamin === 'L' ? 'Laki-laki' : ($pelanggan->jenis_kelamin === 'P' ? 'Perempuan' : $pelanggan->jenis_kelamin) }}
                            </th>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir </th>
                            <th>:</th>
                            <th>{{ $pelanggan->tanggal_lahir }}</th>
                        </tr>

                    </tbody>
                </table>
                <div>
                    <a href="{{ route('pelanggan.index') }}" class="btn btn-danger">Kembali</a>
                </div>
                <hr>
            </div>
        </div>

    </div>
    @include('components.footer')
@endsection
