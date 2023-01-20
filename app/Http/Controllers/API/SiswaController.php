<?php

namespace App\Http\Controllers\API;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Requests\SiswaRequest;
use App\Services\SiswaRepository;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    public function index(){
        
        $siswa = SiswaRepository::ShowSiswa();

       return $siswa;

    }


    public function store(SiswaRequest $request){
        

     $siswa = SiswaRepository::createSiswa($request->all());

    
     return $siswa;


    }

    public function show($id){

        $siswa= SiswaRepository::ShowSpesifikSiswa($id);


        return $siswa;
    }


    public function update(Request $request, $siswa){

        $siswa=SiswaRepository::updateSiswa($request->all(),$siswa);

      return $siswa;


    }

    public function destroy($nis){

        $siswa= SiswaRepository::deleteSiswa($nis);

       return $siswa;




    }



   


      
}
