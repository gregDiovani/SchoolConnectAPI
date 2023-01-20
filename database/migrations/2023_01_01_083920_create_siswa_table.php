<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('siswa', function (Blueprint $table) {
            $table->char('nis')->primary();
            $table->string('nama_siswa');
            $table->string('tempat_Lahir');
            $table->string('tgl_lahir');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->char('kd_kompentensi')->nullable();
            $table->timestamps();
        
            });

          

        }


        
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
