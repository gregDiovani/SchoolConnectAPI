<?php

namespace App\Services;

use App\Models\Nilai;
use Illuminate\Support\Facades\DB;


class NilaiRepository {



    public static function ShowAllNilaiSiswa()
    {
        $siswa= DB::table('nilai')
                ->join('siswa','nilai.nis','=', 'siswa.nis')
                ->join('matpel', 'nilai.kd_matpel', '=', 'matpel.kd_matpel')
                ->join('kompentensi', 'siswa.kd_kompentensi', '=', 'kompentensi.kd_kompentensi')
                ->select('nilai.*', 'siswa.nis', 'siswa.nama_siswa', 'matpel.nama_matpel','kompentensi.*')
                ->get();


        $data = array(
                'nama' => 'Data Nilai Siswa',
                'data' => $siswa
        );
        
                return response()->json($data ,200,['Content-Type: application/json']);

        
        

    }

    public static function createNilai( array $nilai) : Nilai
    {        
        $nilai = Nilai::create($nilai);
        return $nilai;
    }


    public static function updateNilaiSiswa(array $siswa, $kd_nilai) 
    {        
        $data = Nilai::where('kd_nilai', '=', $kd_nilai)->first();

        if(!$data){

            $message = array(
                'status' => 'error',
                'message' => 'no NIS found'
            );

            return response()->json( $message ,404,['Content-Type: application/json']);

        }
        
        $data->update($siswa);

        $message = array(
            'status' => 'Data Nilai Siswa bedasarkan NIS berhasil diperharui',
            'data' => $data
        );


        return response()->json( $message ,200,['Content-Type: application/json']);


        return $data;


        
    }

    public static function showNilaiSiswa($nis){

        $siswa= DB::table('nilai')
        ->where('nis',$nis)
        ->first();

        if(!$siswa){

            $message = array(
                'status' => 'Not Found',
                'message' => "data NIS tidak ditemukan"


            );


            return response()->json( $message ,404,['Content-Type: application/json']);




        }

        $message = array(
            'nama' => 'Data nilai siswa bedasarkan NIS',
            'status' => 'Success',
            'data' => $siswa
        );

        return response()->json( $message ,200,['Content-Type: application/json']);


    }

    public static function deleteNilaiSiswa($kd_nilai) 
    {        
        $data = Nilai::find($kd_nilai);


        if(!$data){

            $message = array(
                'status' => 'error',
                'message' => 'no NIS found'
            );

            return response()->json( $message ,404,['Content-Type: application/json']);
        }


        $message = array(
            'status' => 'success',
            'message' => "data nilai siswa $data->nama_siswa berhasil dihapus",
            'data' => $data
        );


        $data->delete();
        return response()->json( $message ,200,['Content-Type: application/json']);

        

        return $data;
 

    }


}



?>