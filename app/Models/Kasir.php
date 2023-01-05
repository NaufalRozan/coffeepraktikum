<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $table = 'kasir';
    protected $fillable = ['id','Email_Kasir','Nama_Kasir', 'Alamat_Kasir', 'NoHP_Kasir', 'id_pembayaran', 'id_nota'];
}
