<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemberianObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemberian_obat', function (Blueprint $table) {
            $table->id();

            $table->string('no_rawat');
            $table->string('diagnosa');
            $table->string('kode_obat');

            $table->double('biaya_obat');
            $table->double('jumlah');
            $table->double('tambahan');
            $table->double('total');

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
        Schema::dropIfExists('pemberian_obat');
    }
}
