<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'tb_jadwal';

    protected $fillable = [
        'id',
        'waktu_berangkat',
        'id_asal_pelabuhan',
        'id_tujuan_pelabuhan',
        'estimasi_waktu',
        'id_kapal',
        'tanggal',
        'harga'
    ];
}
