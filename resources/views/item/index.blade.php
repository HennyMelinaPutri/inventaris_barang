@extends('layout/apk')

@section('konten')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="d-flex justify-content-between">
            <div class="pb-4">
                <h4><u>Data Barang</u></h4>
            </div>
            <div class="pb-3">
                <a href='' class="btn btn-primary">+ Tambah Data</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">ID Barang</th>
                    <th class="col-md-3">Nama Barang</th>
                    <th class="col-md-4">Bahan</th>
                    <th class="col-md-2">Kondisi</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Meja</td>
                    <td>Kayu Jati</td>
                    <td>Sangat Baik</td>
                    <td>
                        <a href='' class="btn btn-warning btn-sm">Edit</a>
                        <a href='' class="btn btn-danger btn-sm">Del</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
