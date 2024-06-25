<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawatJalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawat_jalan', function (Blueprint $table) {
            $table->id();

            $table->string('no_rawat');
            $table->string('diagnosa');
            $table->string('kd_tindakan');
            $table->string('kd_dokter');
            $table->char('suhu_tubuh');
            $table->char('tensi');
            $table->string('keterangan');
            $table->double('biaya_rawat');

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
        Schema::dropIfExists('rawat_jalan');
    }
}
