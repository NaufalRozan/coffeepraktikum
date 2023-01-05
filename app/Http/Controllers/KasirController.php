<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kasirController extends Controller
{
    public function index()
    {
        $kasir = \App\Models\Kasir::all();
        return view('kasir.index', ['kasir' => $kasir]);
    }
    public function create(Request $request)
    {
        \App\Models\Kasir::create($request->all());
        return redirect('/kasir')->with('Sukses', 'Data berhasil di input!');
    }

    public function edit($id)
    {
        $kasir = \App\Models\Kasir::find($id);
        return view('kasir.edit',['kasir' => $kasir]);
    }

    public function update(Request $request, $id)
    {
        $kasir = \App\Models\Kasir::find($id);
        $kasir->update($request->all());
        return redirect('/kasir')->with('Sukses', 'Data Berhasil diupdate');
    } 
    
    public function delete($id)
    {
        $kasir = \App\Models\Kasir::find($id);
        $kasir->delete();
        return redirect('/kasir')->with("Sukses", 'Data berhasil dihapus');
    }
}
