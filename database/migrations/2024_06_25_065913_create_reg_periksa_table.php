<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegPeriksaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_periksa', function (Blueprint $table) {
            $table->id();
            $table->string('no_rawat');
            $table->date('tgl_registrasi');
            $table->time('jam_reg');
            $table->string('kd_dokter');
            $table->string('no_rkm_medis');
            $table->string('nip');
            $table->double('biaya_reg');
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
        Schema::dropIfExists('reg_periksa');
    }
}
