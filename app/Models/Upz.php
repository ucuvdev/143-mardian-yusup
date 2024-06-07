<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upz extends Model
{
    use HasFactory;
    protected $table = 'upz';
    protected $fillable = ['nm_upz', 'alamat', 'no_telepon', 'ketua', 'sekretaris', 'bendaraha', 'nilai_konversi_zf'];
}
