@extends('layout.apk')
<!-- START FORM -->
@section('konten')
    <form action='{{ url('itemout') }}' method='post'>
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('itemout') }}' class="btn btn-secondary"><< kembali</a>
                <div class="mb-3 row">
                    <label for="nama_barang_out" class="col-sm-2 col-form-label">Nama Barang Masuk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nama_barang_out'value="{{ Session::get('nama_barang_out') }}" id="nama_barang_out">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='supplier' value="{{ Session::get('supplier') }}"id="supplier">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">TAMBAH BARANG KELUAR</button></div>
                </div>
        </div>
    </form>
    <!-- AKHIR FORM -->
@endsection
