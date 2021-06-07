<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Jadwal as model_jadwal;
use App\Models\Kapal as model_kapal;
use App\Models\Pelabuhan as model_pelabuhan;
use App\Models\Pengguna as model_user;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    public function lihat_pelabuhan(Request $request){
        $tipe_pelabuhan = $request->input('tipe_pelabuhan');
        $nama_pelabuhan = model_pelabuhan::select('nama_pelabuhan')->where('tipe_pelabuhan', $tipe_pelabuhan)->get();
        $kode_pelabuhan = model_pelabuhan::select('kode_pelabuhan')->where('tipe_pelabuhan', $tipe_pelabuhan)->get();
        return response()->json([
            'nama_pelabuhan' => $nama_pelabuhan,
            'kode_pelabuhan' => $kode_pelabuhan
        ]);
    }

    public function lihat_kapal(Request $request){
        $tipe_kapal = $request->input('tipe_pelabuhan');
        $nama_kapal = model_kapal::select('nama_kapal')->where('tipe_kapal', $tipe_kapal)->get();
        return response()->json([
            'nama_kapal' => $nama_kapal
        ]);
    }

    public function lihat_kapal_univ(){
        $nama_kapal = model_kapal::select('nama_kapal')->get();
        return response()->json([
            'nama_kapal' => $nama_kapal
        ]);
    }

    public function lihat_jadwal(Request $request){
        $id_pelabuhan_asal = $request->input('id_pelabuhan_asal');
        $id_pelabuhan_tujuan = $request->input('id_pelabuhan_tujuan');
        $id_kapal = $request->input('id_kapal');
        $nama_pelabuhan_asal = model_pelabuhan::select('nama_pelabuhan')->where('id', $id_pelabuhan_asal)->get();
        $nama_pelabuhan_tujuan = model_pelabuhan::select('nama_pelabuhan')->where('id', $id_pelabuhan_tujuan)->get();
        $waktu_berangkat = model_jadwal::select('waktu_berangkat')->where([
            ['id_asal_pelabuhan', '=', $id_pelabuhan_asal],
            ['id_tujuan_pelabuhan', '=', $id_pelabuhan_tujuan],
            ['id_kapal', '=', $id_kapal]
        ])->get();
        $estimasi_waktu = model_jadwal::select('estimasi_waktu')->where([
            ['id_asal_pelabuhan', '=', $id_pelabuhan_asal],
            ['id_tujuan_pelabuhan', '=', $id_pelabuhan_tujuan],
            ['id_kapal', '=', $id_kapal]
        ])->get();
        return response()->json([
            'nama_pelabuhan_asal' => $nama_pelabuhan_asal,
            'nama_pelabuhan_tujuan' => $nama_pelabuhan_tujuan,
            'waktu_berangkat' => $waktu_berangkat,
            'estimasi_waktu' => $estimasi_waktu
        ]);
    }

    public function daftar_chat_id(Request $request){
        $email = $request->input('email');
        $pin = $request->input('pin');
        $chat_id = $request->input('chat_id');
        $pengguna = model_user::where('email', $email)->first();
        if($pengguna->email == $email && $pengguna->pin == $pin){
            $pengguna->chat_id = $chat_id;
            $pengguna->save();
            return response()->json([
                'message' => 'Berhasil'
            ]);
        }else{
            return response()->json([
                'message' => 'Gagal'
            ]);
        }
    }

   
}
