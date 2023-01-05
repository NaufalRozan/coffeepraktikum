<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $fillable = ['id_pembayaran','Jml_Pembayaran', 'Tgl_Pesananan', 'Jenis_Pembayaran', 'Total_Harga','id'];
}
