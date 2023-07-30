@extends('layout/apk')

@section('konten')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="d-flex justify-content-between">
            <div class="pb-4">
                <h4><u>Data Barang</u></h4>
            </div>
            <div class="pb-3">
                <a href='{{ url('item/create') }}' class="btn btn-primary">+ Tambah Barang</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col">ID Barang</th>
                    <th class="col">Nama Barang</th>
                    <th class="col">Bahan</th>
                    <th class="col">Kondisi</th>
                    <th class="col">Jumlah</th>
                    <th class="col">Supplier</th>
                    <th class="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataitem as $item)
                    <tr>
                        <td>{{ $item->id_barang }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->bahan }}</td>
                        <td>{{ $item->kondisi }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->supplier }}</td>
                        <td>
                            <a href='{{ url('item/' . $item->id_barang . '/edit') }}'
                                class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Hapus data barang ini?')" action="{{ url('item/' . $item->id_barang) }}" class='d-inline' method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $dataitem->links() }}

    </div>
@endsection
