<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'tb_user';

    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'jeniskelamin',
        'nohp',
        'email',
        'chat_id',
        'pin',
        'kode_verifikasi_email',
        'role',
        'foto',
        'fcm_token',
        'token_login'
    ];
}
