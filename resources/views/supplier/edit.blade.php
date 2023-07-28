@extends('layout.apk')
<!-- START FORM -->
@section('konten')
    <form action='{{ url('supplier/'.$data->id_supplier) }}' method='post'>
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('supplier') }}' class="btn btn-secondary"><< kembali</a>
                <div class="mb-3 row">
                    <label for="nama_supplier" class="col-sm-2 col-form-label">Nama Supplier</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nama_supplier'value="{{ $data->nama_supplier }}" id="nama_supplier">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='alamat' value="{{ $data->alamat }}"id="alamat">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name='telepon' value="{{ $data->telepon }}"id="telepon">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">EDIT SUPPLIER</button></div>
                </div>
        </div>
    </form>
    <!-- AKHIR FORM -->
@endsection
