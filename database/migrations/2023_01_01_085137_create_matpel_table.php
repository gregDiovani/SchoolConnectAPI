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
        
        
        Schema::create('matpel', function (Blueprint $table) {
            $table->char('kd_matpel')->primary();
            $table->string('nama_matpel');
            $table->string('jumlah_jam');
            $table->string('tingkat');
            $table->char('kd_kompentensi');
            $table->char('nip');
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
        Schema::dropIfExists('matpel');
    }
};
