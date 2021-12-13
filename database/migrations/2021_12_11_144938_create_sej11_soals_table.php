<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSej11SoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sej11_soals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sej11_level_id');
            $table->foreignId('sej11_waktu_id');
            $table->foreignId('gambar_materi_id')->nullable();
            $table->integer('jenis_soal')->default(0);
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
        Schema::dropIfExists('sej11_soals');
    }
}
