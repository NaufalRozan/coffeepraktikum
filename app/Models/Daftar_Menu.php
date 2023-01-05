<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar_Menu extends Model
{
    protected $table = 'daftar_menu';
    protected $fillable = ['id','Nama_Menu','Jml_Menu', 'Kategori_Menu'];
}
