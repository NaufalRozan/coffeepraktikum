<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $data_pelanggan = \App\Models\Pelanggan::all();
        return view('pelanggan.index', ['data_pelanggan' => $data_pelanggan]);
    }
    public function create(Request $request)
    {
        \App\Models\Pelanggan::create($request->all());
        return redirect('/pelanggan')->with('Sukses', 'Data berhasil di input!');
    }

    public function edit($id)
    {
        $data_pelanggan = \App\Models\Pelanggan::find($id);
        return view('pelanggan.edit',['pelanggan' => $data_pelanggan]);
    }

    public function update(Request $request, $id)
    {
        $data_pelanggan = \App\Models\Pelanggan::find($id);
        $data_pelanggan->update($request->all());
        return redirect('/pelanggan')->with('Sukses', 'Data Berhasil diupdate');
    }
    
    public function delete($id)
    {
        $data_pelanggan = \App\Models\Pelanggan::find($id);
        $data_pelanggan->delete();
        return redirect('/pelanggan')->with("Sukses", 'Data berhasil dihapus');
    }
}
