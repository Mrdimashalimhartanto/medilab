<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekam_medis');
            $table->string('nama_pasien');
            $table->string('no_ktp');
            $table->enum('jk', ['L', 'P']);
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->enum('gol_darah', ['A', 'B', 'AB', 'O']);
            $table->string('pekerjaan');
            $table->enum('status_nikah', ['SINGLE', 'MENIKAH', 'JANDA', 'DUDHA']);
            $table->string('agama');
            $table->date('tgl_daftar');
            $table->string('no_tlp');
            $table->string('umur');
            $table->enum('pendidikan', ['TK', 'SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'S1', 'S2', 'S3']);
            $table->enum('keluarga', ['AYAH', 'IBU', 'ANAK', 'KAKAK', 'ADIK', 'TANTANGAN', 'KELUARGA LAIN']);
            $table->string('nama_keluarga');
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
        Schema::dropIfExists('pasien');
    }
}
