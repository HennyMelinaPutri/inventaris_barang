<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <title>Inventaris Barang</title>
</head>

<body>
    <header class="navbar navbar-expand-lg bg-body-tertiary bg-info-subtle">
        <div class="container-fluid p-3 ps-5">
            <h3>INVENTARIS BARANG</h3>
            @if (Auth::check())
                @include('komponen/menu')
            @endif
        </div>
    </header>
    <main>
        <div class="d-flex ">
            @if (Auth::check())
                @include('komponen/sidebar')
            @endif
            <div class="w-100">
                @include('komponen/error')
                @yield('konten')
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>