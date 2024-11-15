<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>CRUD LARAVEL</title>

    <style>
        body {

            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .card-custom {
            border-radius: 15px;
            transition: 0.3s;
        }

        .card-custom:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-custom h4 {
            font-weight: bold;
        }
    </style>
</head>

<body>
    @include('components.navbar')
    <div class="container py-5">
        <h1 class="mb-4 text-center">Dashboard Home</h1>

        <div class="row">


            <div class="col-md-6 mb-4">
                <div class="card card-custom bg-info text-white shadow-sm">
                    <div class="card-body text-center">
                        <h4>Jumlah Total Barang</h4>
                        <h1>{{ $jumlahBarang }}</h1>
                    </div>
                    <a href="{{ route('barang.index') }}">
                        <button class="btn btn-light ms-2 mb-2">Lihat Lainnya</button>
                    </a>
                </div>
            </div>


            <div class="col-md-6 mb-4">
                <div class="card card-custom bg-warning text-white shadow-sm">

                    <div class="card-body text-center">
                        <h4>Jumlah Total Pelanggan</h4>
                        <h1>{{ $jumlahPelanggan }}</h1>
                    </div>
                    <a href="{{ route('pelanggan.index') }}">
                        <button class="btn btn-light ms-2 mb-2">Lihat Lainnya</button>
                    </a>
                </div>
            </div>

        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        @stack('js')
        <footer class="bg-dark-subtle text-center fixed-bottom p-3">
            <h1 class="fs-2 mt-3">UTS Web Programming</h1>
            <p class="text-muted mb-3">Copyright &copy; Dewa Cahaya - Decay - 2024</p>
        </footer>

</body>

</html>
