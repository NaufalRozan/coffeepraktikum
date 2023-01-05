<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = \App\Models\Pemesanan::all();
        return view('pemesanan.index', ['pemesanan' => $pemesanan]);
    }
    public function create(Request $request)
    {
        \App\Models\pemesanan::create($request->all());
        return redirect('/pemesanan')->with('Sukses', 'Data berhasil di input!');
    }

    public function edit($id)
    {
        $pemesanan = \App\Models\Pemesanan::find($id);
        return view('pemesanan.edit',['pemesanan' => $pemesanan]);
    }

    public function update(Request $request, $id)
    {
        $pemesanan = \App\Models\Pemesanan::find($id);
        $pemesanan->update($request->all());
        return redirect('/pemesanan')->with('Sukses', 'Data Berhasil diupdate');
    } 
    
    public function delete($id)
    {
        $pemesanan = \App\Models\Pemesanan::find($id);
        $pemesanan->delete();
        return redirect('/pemesanan')->with("Sukses", 'Data berhasil dihapus');
    }
}
