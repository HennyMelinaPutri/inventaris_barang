@extends('layout.apk')
<!-- START FORM -->
@section('konten')
    <form action='{{ url('item/'.$dataitem->id_item) }}' method='post'>
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('item') }}' class="btn btn-secondary"><< kembali</a>
            <div class="mb-3 row">
                <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_barang'value="{{ $dataitem->nama_barang) }}" id="nama_barang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bahan" class="col-sm-2 col-form-label">Bahan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='bahan' value="{{ $dataitem->bahan) }}"id="bahan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kondisi" class="col-sm-2 col-form-label">Kondisi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='kondisi' value="{{ $dataitem->kondisi) }}"id="kondisi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jumlah' value="{{ $dataitem->jumlah) }}"id="jumlah">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='supplier' value="{{ $dataitem->supplier) }}"id="supplier">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">EDIT BARANG</button></div>
            </div>
        </div>
    </form>
    <!-- AKHIR FORM -->
@endsection