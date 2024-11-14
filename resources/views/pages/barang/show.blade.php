@extends('layouts.master')

@section('content')
    @include('components.navbar')
    <div class="px-5 py-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1>Detail Data Barang</h1>
                </div>
                <hr>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Kode </th>
                            <th>:</th>
                            <th>{{ $barang->kode }}</th>
                        </tr>
                        <tr>
                            <th>Nama </th>
                            <th>:</th>
                            <th>{{ $barang->name }}</th>
                        </tr>
                        <tr>
                            <th>Harga </th>
                            <th>:</th>
                            <th>{{ $barang->harga }}</th>
                        </tr>

                    </tbody>
                </table>
                <div>
                    <a href="{{ route('barang.index') }}" class="btn btn-danger">Kembali</a>
                </div>
                <hr>
            </div>
        </div>

    </div>
    @include('components.footer')
@endsection
