<?php

namespace App\Services;


class RepositoryService {

    protected $koneksi;
    
    public function __construct(string $koneksi)
    {
        $this->koneksi = $koneksi;
    }

    

   public function get_Database(){
       return "Panggil data dari database menggunakan $this->koneksi ";
   }



}