<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asnaf extends Model
{
    use HasFactory;
    protected $table = 'asnaf';
    protected $fillable = ['nm_asnaf', 'persentase_penyaluran'];
}
