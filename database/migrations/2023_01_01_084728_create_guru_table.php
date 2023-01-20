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


        Schema::create('guru', function (Blueprint $table) {
            $table->char('nip')->primary();
            $table->string('nama_guru');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('jenkel');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('pend_terakhir');
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
        Schema::dropIfExists('guru');
    }
};
