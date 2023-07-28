@extends('layout/apk')

@section('konten')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="d-flex justify-content-between">
            <div class="pb-4">
                <h4><u>Data Supplier</u></h4>
            </div>
            <div class="pb-3">
                <a href='{{ url('supplier/create') }}' class="btn btn-primary">+ Tambah Supplier</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">ID Supplier</th>
                    <th class="col-md-3">Nama Supplier</th>
                    <th class="col-md-4">Alamat</th>
                    <th class="col-md-2">Telepon</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id_supplier }}</td>
                        <td>{{ $item->nama_supplier }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->telepon }}</td>
                        <td>
                            <a href='{{ url('supplier/' . $item->id_supplier . '/edit') }}'
                                class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Hapus data supplier ini?')" action="{{ url('supplier/' . $item->id_supplier) }}" class='d-inline' method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $data->links() }}

    </div>
@endsection
