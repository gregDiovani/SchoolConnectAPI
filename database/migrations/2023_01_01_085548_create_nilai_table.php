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
    

        Schema::create('nilai', function (Blueprint $table) {
            $table->id('kd_nilai');
            $table->char('nis');
            $table->char('kd_matpel');
            $table->string('nilai_p');
            $table->string('nilai_k');
            $table->string('semester');
            $table->string('tapel');
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
        Schema::dropIfExists('nilai');
    }
};
