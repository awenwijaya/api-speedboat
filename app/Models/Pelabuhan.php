<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelabuhan extends Model
{
    use HasFactory;

    protected $table = 'tb_pelabuhan';

    protected $fillable = [
        'id',
        'kode_pelabuhan',
        'nama_pelabuhan',
        'lokasi_pelabuhan',
        'alamat_kantor',
        'foto',
        'latitude',
        'longitude',
        'lama_beroperasi',
        'status',
        'tipe_pelabuhan'
    ];
}
