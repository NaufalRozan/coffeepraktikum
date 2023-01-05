<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $owner = \App\Models\Owner::all();
        return view('owner.index', ['owner' => $owner]);
    }

    public function create(Request $request)
    {
        Owner::create($request->all());
        return redirect('/owner')->with('Sukses', 'Data Berhasil di Input!');
    }

    public function edit($id)
    {
        $owner = \App\Models\Owner::find($id);
        return view('owner.edit',['owner' => $owner]);
    }

    public function update(Request $request, $id)
    {
        $owner = \App\Models\Pembayaran::find($id);
        $owner->update($request->all());
        return redirect('/owner')->with('Sukses', 'Data Berhasil diupdate');
    }   

    public function delete($id)
    {
        $owner = \App\Models\Owner::find($id);
        $owner->delete();
        return redirect('/owner')->with("Sukses", 'Data berhasil dihapus');
    }
}
