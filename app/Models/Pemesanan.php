<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = ['id_nota','Jml_Pesanan','Harga_Menu', 'Alamat_Pelanggan', 'Tgl_Pesanan', 'id','id_menu'];
}
