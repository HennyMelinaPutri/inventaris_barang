<?php

namespace App\Http\Controllers;

use App\Models\item_out;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ItemOutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahhalaman = 5;

        $dataout = item_out::orderBy('id_out', 'asc')->paginate($jumlahhalaman);
        return view('itemout.index')->with('dataout', $dataout);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('itemout.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_barang_out', $request->nama_barang_out);
        Session::flash('supplier', $request->supplier);

        $request->validate([
            'nama_barang_out' => 'required|unique:item_out,nama_barang_out',
            'supplier' => 'required'
        ], [
            'nama_barang_out.required' => 'Nama barang wajib diisi',
            'nama_barang_out.unique' => 'Barang sudah terdaftar dalam sistem',
            'supplier.required' => 'Supplier barang wajib diisi',
        ]);

        $dataout = [
            'nama_barang_out' => $request->nama_barang_out,
            'supplier' => $request->supplier,
        ];
        item_out::create($dataout);
        return redirect()->to('itemout')->with('sukses', 'Berhasil menambahkan data barang keluar');
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
        $dataout = item_out::where('id_out', $id)->first();
        return view('itemout.edit')->with('dataout', $dataout);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang_out' => 'required',
            'supplier' => 'required'
        ], [
            'nama_barang_out.required' => 'Nama barang wajib diisi',
            'supplier.required' => 'Supplier barang wajib diisi',
        ]);

        $dataout = [
            'nama_barang_out' => $request->nama_barang_out,
            'supplier' => $request->supplier,
        ];
        item_out::where('id_out', $id)->update($dataout);
        return redirect()->to('itemout')->with('sukses', 'Berhasil edit data barang keluar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        item_out::where('id_out', $id)->delete();
        return redirect()->to('itemout')->with('sukses', 'Berhasil menghapus data barang keluar');
    }
}
