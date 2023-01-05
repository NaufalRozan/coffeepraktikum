<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = \App\Models\Pembayaran::all();
        return view('pembayaran', ['pembayaran' => $pembayaran]);
    }

    public function create(Request $request)
    {

        Pembayaran::create($request->all());
        return redirect('/pembayaran')->with('Sukses', 'Data Berhasil di Input!');
    }

    public function edit($id_pembayaran)
    {
        $pembayaran = \App\Models\Pembayaran::find($id_pembayaran);
        return view('pembayaran.edit',['pembayaran' => $pembayaran]);
    }

    public function update(Request $request, $id_pembayaran)
    {
        $pembayaran = \App\Models\Pembayaran::find($id_pembayaran);
        $pembayaran->update($request->all());
        return redirect('/pembayaran')->with('Sukses', 'Data Berhasil diupdate');
    }

    public function delete($id_pembayaran)
    {
        $pembayaran = \App\Models\Pembayaran::find($id_pembayaran);
        $pembayaran->delete();
        return redirect('/pembayaran')->with("Sukses", 'Data berhasil dihapus');
    }
}
