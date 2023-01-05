<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Daftar_MenuController extends Controller
{
    public function index()
    {
        $daftar_menu = \App\Models\Daftar_Menu::all();
        return view('daftar_menu.index', ['daftar_menu' => $daftar_menu]);
    }
    public function create(Request $request)
    {
        \App\Models\Daftar_Menu::create($request->all());
        return redirect('/daftar_menu')->with('Sukses', 'Data berhasil di input!');
    }

    public function edit($id)
    {
        $daftar_menu = \App\Models\Daftar_Menu::find($id);
        return view('daftar_menu.edit',['daftar_menu' => $daftar_menu]);
    }

    public function update(Request $request, $id)
    {
        $daftar_menu = \App\Models\Daftar_Menu::find($id);
        $daftar_menu->update($request->all());
        return redirect('/daftar_menu')->with('Sukses', 'Data Berhasil diupdate');
    }  
    
    public function delete($id)
    {
        $daftar_menu = \App\Models\Daftar_Menu::find($id);
        $daftar_menu->delete();
        return redirect('/daftar_menu')->with("Sukses", 'Data berhasil dihapus');
    }
}
