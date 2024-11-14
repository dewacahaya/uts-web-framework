@extends('layouts.master')

@section('content')
    @include('components.navbar')
    <div class="px-5 py-5">
        @if (session('created'))
            <div class="alert alert-success" role="alert">
                {{ session('created') }}
            </div>
        @endif
        @if (session('updated'))
            <div class="alert alert-warning" role="alert">
                {{ session('updated') }}
            </div>
        @endif
        @if (session('deleted'))
            <div class="alert alert-danger" role="alert">
                {{ session('deleted') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between py-3">
                    <h1 class="">Halaman Data Pelanggan</h1>

                    <div>
                        <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">Tambah Data Pelanggan</a>
                    </div>
                </div>
                <table class="table table-bordered table-striped mt-1">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pelanggan as $p => $pel)
                            <tr>
                                <td>{{ $p + 1 }}</td>
                                <td>{{ $pel->kode }}</td>
                                <td>{{ $pel->nama }}</td>
                                <td>{{ $pel->alamat }}</td>
                                <td>{{ $pel->jenis_kelamin === 'L' ? 'Laki-laki' : ($pel->jenis_kelamin === 'P' ? 'Perempuan' : $pel->jenis_kelamin) }}
                                </td>
                                <td>{{ $pel->tanggal_lahir }}</td>
                                <td class="text-center">
                                    <a href="{{ route('pelanggan.edit', $pel->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('pelanggan.show', $pel->id) }}"
                                        class="btn btn-sm btn-info">Detail</a>
                                    <button type="button" class="btn btn-sm btn-danger"
                                        onclick="hapusData(`btndelete{{ $pel->id }}`)">Hapus</button>
                                    <form action="{{ route('pelanggan.destroy', $pel->id) }}" method="POST"
                                        style="display: none">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="btndelete{{ $pel->id }}"></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Data tidak ditemukan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <hr>
            </div>
        </div>

    </div>
@endsection

@push('js')
    <script>
        function hapusData(id) {
            Swal.fire({
                title: "Yakin hapus data ini?",
                text: "Data yang dihapus tidak bisa dipulihkan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(id).click();
                }
            });
        }
    </script>
@endpush
@include('components.footer')
