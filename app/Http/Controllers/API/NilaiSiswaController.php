<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Services\NilaiRepository;

use App\Http\Requests\NilaiRequest;
use App\Http\Controllers\Controller;

class NilaiSiswaController extends Controller
{
    public function index(){
        
        $nilai = NilaiRepository::ShowAllNilaiSiswa();

       return $nilai;

    }

    public function create(NilaiRequest $request){
        
        $nilai = NilaiRepository::createNilai($request->all());

        $data = array(
            'nama' => 'Data Nilai Siswa',
            'data' => $nilai
        );

        return response()->json($data ,200,['Content-Type: application/json']);

    }

    public function show($nis){

        $siswa = NilaiRepository::showNilaiSiswa($nis);

        return $siswa;


       }



       public function update(Request $request, $siswa){

        $siswa = NilaiRepository::updateNilaiSiswa($request->all(),$siswa);

        return $siswa;


       }



       public function destroy($kd_nilai){

        $siswa = NilaiRepository::deleteNilaiSiswa($kd_nilai);

        return $siswa;


       }



    

    
}
