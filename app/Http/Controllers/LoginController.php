<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function index()
    {
        return view('login.index');
    }

    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('item')->with('sukses', 'berhasil login');
        } else {
            return redirect('login')->withErrors('Email dan Password yang Dimaksukkan Tidak Valid');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login')->with('sukses', 'Berhasil logout');
    }
}
