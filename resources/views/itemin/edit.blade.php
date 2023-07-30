@extends('layout.apk')
<!-- START FORM -->
@section('konten')
    <form action='{{ url('itemin/' . $datain->id_in) }}' method='post'>
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('itemin') }}' class="btn btn-secondary">
                << kembali</a>
                    <div class="mb-3 row">
                        <label for="nama_barang_in" class="col-sm-2 col-form-label">Nama Barang Masuk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='nama_barang_in'value="{{ $datain->nama_barang_in }}"
                                id="nama_barang_in">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='supplier'
                                value="{{ $datain->supplier }}"id="supplier">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">EDIT BARANG MASUK</button></div>
                    </div>
        </div>
    </form>
    <!-- AKHIR FORM -->
@endsection
