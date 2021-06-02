<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index()
    {
        return view('siswa.index');
    }
    public function tambah()
    {
        return view('siswa.tambah');
    }
    public function edit()
    {
        return view('siswa.edit');
    }
}
