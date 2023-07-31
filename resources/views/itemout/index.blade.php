@extends('layout/apk')

@section('konten')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="d-flex justify-content-between">
            <div class="pb-4">
                <h4><u>Data Barang Keluar</u></h4>
            </div>
            <div class="pb-3">
                <a href='{{ url('itemout/create') }}' class="btn btn-primary">+ Tambah Barang Keluar</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col">ID Barang Keluar</th>
                    <th class="col">Nama Barang</th>
                    <th class="col">Supplier</th>
                    <th class="col">Tanggal Keluar</th>
                    <th class="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataout as $item)
                    <tr>
                        <td>{{ $item->id_out }}</td>
                        <td>{{ $item->nama_barang_out }}</td>
                        <td>{{ $item->supplier }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href='{{ url('itemout/' . $item->id_out . '/edit') }}'
                                class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Hapus data barang ini?')" action="{{ url('itemout/' . $item->id_out) }}" class='d-inline' method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $dataout->links() }}

    </div>
@endsection
