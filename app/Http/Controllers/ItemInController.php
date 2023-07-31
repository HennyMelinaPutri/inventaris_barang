<?php

namespace App\Http\Controllers;

use App\Models\item_in;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ItemInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahhalaman = 5;

        $datain = item_in::orderBy('id_in', 'asc')->paginate($jumlahhalaman);
        return view('itemin.index')->with('datain', $datain);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('itemin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_barang_in', $request->nama_barang_in);
        Session::flash('supplier', $request->supplier);

        $request->validate([
            'nama_barang_in' => 'required|unique:item_in,nama_barang_in',
            'supplier' => 'required'
        ], [
            'nama_barang_in.required' => 'Nama barang wajib diisi',
            'nama_barang_in.unique' => 'Barang sudah terdaftar dalam sistem',
            'supplier.required' => 'Supplier barang wajib diisi',
        ]);

        $datain = [
            'nama_barang_in' => $request->nama_barang_in,
            'supplier' => $request->supplier,
        ];
        item_in::create($datain);
        return redirect()->to('itemin')->with('sukses', 'Berhasil menambahkan data barang masuk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $datain = item_in::where('id_in', $id)->first();
        return view('itemin.edit')->with('datain', $datain);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang_in' => 'required',
            'supplier' => 'required'
        ], [
            'nama_barang.required' => 'Nama barang wajib diisi',
            'supplier.required' => 'Supplier barang wajib diisi',
        ]);

        $datain = [
            'nama_barang_in' => $request->nama_barang_in,
            'supplier' => $request->supplier,
        ];
        item_in::where('id_in', $id)->update($datain);
        return redirect()->to('itemin')->with('sukses', 'Berhasil edit data barang masuk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        item_in::where('id_in', $id)->delete();
        return redirect()->to('itemin')->with('sukses', 'Berhasil menghapus data barang masuk');
    }
}
