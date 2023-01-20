<?php

namespace App\Services;

use App\Models\Nilai;
use App\Models\Siswa;
use Database\Factories\SiswaFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Arrays;

class SiswaRepository {

    public static function ShowSiswa(){

        $siswa= DB::table('siswa')->get();
        

        $message = array(
            'nama' => 'Data Siswa',
            'data' => $siswa
        );

        return response()->json( $message ,200,['Content-Type: application/json']);

    }

    public static function ShowSpesifikSiswa($nis){

        $siswa= DB::table('siswa')
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
            'nama' => 'Data Siswa',
            'data' => $siswa
        );

        return response()->json( $message ,200,['Content-Type: application/json']);


    }
    
    
    public static function createSiswa(array $siswa) 
    {        
        $siswa = Siswa::create($siswa);
        
        $message = array(
            'nama' => 'Data Siswa Berhasil ditambahkan',
            'data' => $siswa
        );
    
        return response()->json( $message ,200,['Content-Type: application/json']);

    }


    public static function updateSiswa(array $siswa, $nis) 
    {        
        $data = Siswa::where('nis', '=', $nis)->first();

        if(!$data){

            $message = array(
                'status' => 'error',
                'message' => 'no NIS found'
            );

            return response()->json( $message ,404,['Content-Type: application/json']);


        }

        
        $data->update($siswa);

        $message = array(
            'status' => 'Data Siswa bedasarkan NIS berhasil diperharui',
            'data' => $data
        );


        return response()->json( $message ,200,['Content-Type: application/json']);


        return $data;
 

    }

    public static function deleteSiswa($nis) 
    {        
        $data = Siswa::find($nis);

        

        if($data == null){

            $message = array(
                'status' => 'error',
                'message' => 'no NIS found'
            );

            return response()->json( $message ,404,['Content-Type: application/json']);
        }


        $message = array(
            'status' => 'success',
            'message' => "data siswa $data->nama_siswa berhasil dihapus",
            'data' => $data
        );


        $data->delete();
        return response()->json( $message ,200,['Content-Type: application/json']);

        

        return $data;
 

    }



   


   

   

}   
