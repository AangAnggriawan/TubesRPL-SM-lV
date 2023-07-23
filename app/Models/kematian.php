<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kematian extends Model
{
    use HasFactory;
    protected $fillable = ['pelapor','hubungan','nama','NIK','umur','agama','rt_rw','desa','kecamatan','hari','tanggal','penyebab'];
}
