@extends('layout/apk')

@section('konten')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="d-flex justify-content-between">
            <div class="pb-4">
                <h4><u>Data Admin</u></h4>
            </div>
            <div class="pb-3">
                <a href='{{ url('user/create') }}' class="btn btn-primary">+ Tambah Admin</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-3">ID Admin</th>
                    <th class="col-md-3">Nama Admin</th>
                    <th class="col-md-4">Email</th>
                    <th class="col-md-2">Password</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datauser as $item)
                    <tr>
                        <td>{{ $item->id_user }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>********</td>
                        <td>
                            <a href='{{ url('user/' . $item->id_user . '/edit') }}'
                                class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Hapus akun admin ini?')" action="{{ url('user/' . $item->id_user) }}" class='d-inline' method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $datauser->links() }}

    </div>
@endsection
