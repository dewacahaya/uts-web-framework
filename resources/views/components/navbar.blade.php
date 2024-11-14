    <nav class="navbar navbar-expand-lg bg-body-transparent">
        <div class="container-fluid m-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand mx-3 fs-3 fw-bold" href="{{ route('home.view') }}">Web UTS</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="{{ route('barang.index') }}">Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="{{ route('pelanggan.index') }}">Pelanggan</a>
                    </li>
                </ul>
                <form class="d-flex mb-3" method="GET" action="{{ route('barang.index') }}" role="search">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search"
                        aria-label="Search" value="{{ request('search') }}">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>

            </div>
        </div>
    </nav>
