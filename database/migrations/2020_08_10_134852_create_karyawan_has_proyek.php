<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanHasProyek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan_has_proyek', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('karyawan_id')->nullable();
            $table->unsignedBigInteger('proyek_id')->nullable();

            $table->foreign('karyawan_id')->references('id')->on('karyawan');
            $table->foreign('proyek_id')->references('id')->on('proyek');
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
        Schema::dropIfExists('karyawan_has_proyek');
    }
}
