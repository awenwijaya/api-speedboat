<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kapal extends Model
{
    use HasFactory;

    protected $table = 'tb_kapal';

    protected $fillable = [
        'id',
        'nama_kapal',
        'kapasitas',
        'deskripsi',
        'foto',
        'contact_service',
        'tanggal_beroperasi',
        'tipe_kapal'
    ];
}
