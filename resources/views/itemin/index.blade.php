@extends('layout/apk')

@section('konten')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="d-flex justify-content-between">
            <div class="pb-4">
                <h4><u>Data Barang Masuk</u></h4>
            </div>
            <div class="pb-3">
                <a href='{{ url('itemin/create') }}' class="btn btn-primary">+ Tambah Barang Masuk</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col">ID Barang Masuk</th>
                    <th class="col">Nama Barang</th>
                    <th class="col">Supplier</th>
                    <th class="col">Tanggal Masuk</th>
                    <th class="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datain as $item)
                    <tr>
                        <td>{{ $item->id_in }}</td>
                        <td>{{ $item->nama_barang_in }}</td>
                        <td>{{ $item->supplier }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href='{{ url('itemin/' . $item->id_in . '/edit') }}'
                                class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Hapus data barang ini?')" action="{{ url('itemin/' . $item->id_in) }}" class='d-inline' method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $datain->links() }}

    </div>
@endsection
