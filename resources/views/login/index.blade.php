 @extends('layout/apk')

@section('konten')
    <div class="d-flex align-items-center py-4 bg-body-tertiary">
        <div class="form-signin w-100 m-auto">
            <form action="/login/admin" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Login</h1>
                <div class="form">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                </div>
                <div class="form">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                </div>
                <button name="submit" class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>
        </div>
    </div>
@endsection
