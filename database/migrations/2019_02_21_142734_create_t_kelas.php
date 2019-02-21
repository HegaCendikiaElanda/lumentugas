<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTKelas extends Migration
{
    /**
     * Run the migrations.
     * Hega Cendikia Elanda
     * @return void
     */
    public function up()
    {
        Schema::create('t_kelas', function (Blueprint $table){
            $table->increments('id');
            $table->string('nama_kelas', 150);
            $table->string('jurusan', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Hega Cendikia Elanda
     * @return void
     */
    public function down()
    {
        //
    }
}
