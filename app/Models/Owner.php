<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owner';
    protected $fillable = ['id','Nama_Owner','Email_Owner', 'Alamat_Owner', 'id_kasir'];
}
