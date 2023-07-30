<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <title>Inventaris Barang</title>

    <style>
        .form-signin {
            max-width: 330px;
            padding: 1rem;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body>
    <main>
        @include('komponen/pesan')
        <div class="form-signin w-100 m-auto">
            <form action="/login/admin" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-bold">Login</h1>
                <div class="form pt-2">
                    <label for="email" class="form-label fw-medium">Email</label>
                    <input name="email" type="email" value="{{ Session::get('email') }}" class="form-control"
                        id="floatingInput" placeholder="name@example.com">
                </div>
                <div class="form pt-3">
                    <label for="password" class="form-label fw-medium">Password</label>
                    <input name="password" type="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                </div>
                <button name="submit" class="btn btn-primary w-100 py-2 mt-4 fw-bold" type="submit">Login</button>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
