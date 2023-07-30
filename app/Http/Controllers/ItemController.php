<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahhalaman = 5;

        $dataitem = item::orderBy('id_barang', 'asc')->paginate($jumlahhalaman);
        return view('item.index')->with('dataitem', $dataitem);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_barang', $request->nama_barang);
        Session::flash('bahan', $request->bahan);
        Session::flash('kondisi', $request->kondisi);
        Session::flash('jumlah', $request->jumlah);
        Session::flash('supplier', $request->supplier);

        $request->validate([
            'nama_barang' => 'required|unique:item,nama_barang',
            'bahan' => 'required',
            'kondisi' => 'required',
            'jumlah' => 'required|numeric',
            'supplier' => 'required'
        ], [
            'nama_barang.required' => 'Nama barang wajib diisi',
            'nama_barang.unique' => 'Barang sudah terdaftar dalam sistem',
            'bahan.required' => 'Bahan wajib diisi',
            'kondisi.required' => 'Kondisi barang wajib diisi',
            'jumlah.required' => 'Jumlah barang wajib diisi',
            'jumlah.numeric' => 'Masukkan jumlah barang dengan angka',
            'supplier.required' => 'Supplier barang wajib diisi',
        ]);

        $dataitem = [
            'nama_barang' => $request->nama_barang,
            'bahan' => $request->bahan,
            'kondisi' => $request->kondisi,
            'jumlah' => $request->jumlah,
            'supplier' => $request->supplier,
        ];
        item::create($dataitem);
        return redirect()->to('item')->with('sukses', 'Berhasil menambahkan data barang');
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
        $dataitem = item::where('id_barang', $id)->first();
        return view('item.edit')->with('data', $dataitem);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'bahan' => 'required',
            'kondisi' => 'required',
            'jumlah' => 'required|numeric',
            'supplier' => 'required'
        ], [
            'nama_barang.required' => 'Nama barang wajib diisi',
            'bahan.required' => 'Bahan wajib diisi',
            'kondisi.required' => 'Kondisi barang wajib diisi',
            'jumlah.required' => 'Jumlah barang wajib diisi',
            'jumlah.numeric' => 'Masukkan jumlah barang dengan angka',
            'supplier.required' => 'Supplier barang wajib diisi',
        ]);

        $dataitem = [
            'nama_barang' => $request->nama_barang,
            'bahan' => $request->bahan,
            'kondisi' => $request->kondisi,
            'jumlah' => $request->jumlah,
            'supplier' => $request->supplier,
        ];
        item::where('id_barang', $id)->update($dataitem);
        return redirect()->to('item')->with('sukses', 'Berhasil edit data barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        item::where('id_barang', $id)->delete();
        return redirect()->to('item')->with('sukses', 'Berhasil menghapus data barang');
    }
}
