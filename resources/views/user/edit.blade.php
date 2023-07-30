@extends('layout.apk')
<!-- START FORM -->
@section('konten')
    <form action='{{ url('user/'.$datauser->id_user) }}' method='post'>
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('user') }}' class="btn btn-secondary"><< kembali</a>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nama Admin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='name'value="{{ $datauser->name }}" id="name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name='email' value="{{ $datauser->email }}"id="email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name='password' value="********" id="password">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">EDIT ADMIN</button></div>
                </div>
        </div>
    </form>
    <!-- AKHIR FORM -->
@endsection
