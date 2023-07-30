<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahhalaman = 5;

        $datauser = User::orderBy('id_user', 'asc')->paginate($jumlahhalaman);
        return view('user.index')->with('datauser', $datauser);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:User,name',
            'password' => 'required',

        ], [
            'name.required' => 'Nama Admin wajib diisi',
            'email.unique' => 'Email sudah terdaftar dalam sistem',
            'email.required' => 'email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $datauser = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => password_hash($request->email, PASSWORD_DEFAULT),
        ];
        User::create($datauser);
        return redirect()->to('user')->with('sukses', 'Berhasil menambahkan Admin');
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
    public function edit(string $id)
    {
        $datauser = User::where('id_user', $id)->first();
        return view('user.edit')->with('datauser', $datauser);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ], [
            'name.required' => 'Nama Admin wajib diisi',
            'email.required' => 'email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $datauser = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => password_hash($request->email, PASSWORD_DEFAULT),
        ];
        User::where('id_user', $id)->update($datauser);
        return redirect()->to('user')->with('sukses', 'Berhasil edit Admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id_user', $id)->delete();
        return redirect()->to('user')->with('sukses', 'Berhasil menghapus data Admin');
    }
}
