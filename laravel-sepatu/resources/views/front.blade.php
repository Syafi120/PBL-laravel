<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi - sepatu</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">

        <div class="mt-2">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <h1><a href="#" class="text-reset text-decoration-none fst-italic fs-3"><img style="width: 80px" src="{{ asset('gambar/209537718_309638597509241_4286802499385547827_n__1_-removebg-preview.png') }}" alt="">Yuri.Nime's Shop</a></h1>
                    <form class="d-flex ms-4" role="search">
                        <input class="form-control me-2" type="search" placeholder="Temukan Produk" aria-label="Temukan Produk">
                        <button class="btn btn-outline-secondary" type="submit">Cari</button>
                    </form>
                    <ul class="navbar-nav gap-5">
                        <li class="nav-item">Cart</li>
                        <li class="nav-item">Register</li>
                        <li class="nav-item">Email</li>
                        <li class="nav-item">Login</li>
                        <li class="nav-item">Logout</li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="row mt-4">
            <div class="col-2">
                <ul class="list-group">
                    @foreach ($Kategoris as $Kategori)
                        <li class="list-group-item">{{ $Kategori -> kategori }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="col-8">
                @yield('content')
            </div>
        </div>

        <div>
            footer
        </div>

    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>