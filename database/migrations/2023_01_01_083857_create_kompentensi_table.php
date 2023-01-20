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
        
        Schema::create('kompentensi', function (Blueprint $table) {
            $table->char('kd_kompentensi')->primary();
            $table->string('nama_kompentensi');
            $table->string('prog_keahlian');
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
        Schema::dropIfExists('kompentensi');
    }
};
