<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahhalaman = 10;

        $data = supplier::orderBy('id_supplier', 'asc')->paginate($jumlahhalaman);
        return view('supplier.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_supplier', $request->nama_supplier);
        Session::flash('alamat', $request->alamat);
        Session::flash('telepon', $request->telepon);

        $request->validate([
            'nama_supplier' => 'required|unique:supplier,nama_supplier',
            'alamat' => 'required',
            'telepon' => 'required|numeric|min:10'
        ], [
            'nama_supplier.required' => 'Nama supplier wajib diisi',
            'nama_supplier.unique' => 'Supplier sudah terdaftar dalam sistem',
            'alamat.required' => 'Alamat supplier wajib diisi',
            'telepon.required' => 'Telepon supplier wajib diisi',
            'telepon.numeric' => 'Masukkan nomor telepon dengan angka yang benar',
        ]);

        $data = [
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ];
        supplier::create($data);
        return redirect()->to('supplier')->with('sukses', 'Berhasil menambahkan data supplier');
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
        $data = supplier::where('id_supplier', $id)->first();
        return view('supplier.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|numeric|min:10'
        ], [
            'nama_supplier.required' => 'Nama supplier wajib diisi',
            'alamat.required' => 'Alamat supplier wajib diisi',
            'telepon.required' => 'Telepon supplier wajib diisi',
            'telepon.numeric' => 'Masukkan nomor telepon dengan angka yang benar',
        ]);

        $data = [
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ];
        supplier::where('id_supplier', $id)->update($data);
        return redirect()->to('supplier')->with('sukses', 'Berhasil mengedit data supplier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        supplier::where('id_supplier', $id)->delete();
        return redirect()->to('supplier')->with('sukses', 'Berhasil menghapus data supplier');
    }
}
