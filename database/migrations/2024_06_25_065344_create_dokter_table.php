<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();
            $table->string('kd_dokter'); // kode dokter
            $table->string('nama_dokter'); // nama dokter
            $table->enum('jenis_kelamin', ['L', 'P']); // jenis kelamin dokter
            $table->string('tempat_lahir'); // tempat lahir dokter
            $table->date('tanggal_lahir'); // tanggal lahir dokter
            $table->string('no_ijin_praktek'); // nomor ijin praktek dokter
            $table->string('alamat'); // alamat tempat tinggal dokter
            $table->string('password'); // password login dokter
            $table->softDeletes();
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
        Schema::dropIfExists('dokter');
    }
}
