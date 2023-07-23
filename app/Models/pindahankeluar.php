<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pindahankeluar extends Model
{
    use HasFactory;
    protected $fillable = ['nama','NIK','rt_rw','desa','kecamatan','kabupaten','provinsi'];

}
