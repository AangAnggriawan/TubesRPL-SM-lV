<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    protected $fillable = ['nama','NIK','rt_rw','desa','kecamatan','kabupaten','provinsi'];
}
