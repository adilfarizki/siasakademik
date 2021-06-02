<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelasModel;

class KelasController extends Controller
{
    //
    public function index()
    {
        $kelas = KelasModel::all();
        return view('kelas.index', compact('kelas'));
    }
    public function tambah()
    {
        return view('kelas.tambah');
    }

    public function store(Request $request)
    {
        kelasModel::create($request->all());
        return redirect()->route('kelas.index');
    }

    public function edit($id)
    {
        $kelas = KelasModel::find($id);
        return view('kelas.edit', compact('kelas'));
    }
    public function update(Request $request,$id)
    {
        KelasModel::find($id)->update($request->all());
        return redirect()->route('kelas.index');
    }
    public function hapus($id)
    {
        KelasModel::destroy($id);
        return redirect()->route('kelas.index');
    }

}
