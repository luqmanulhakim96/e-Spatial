<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_data');
            $table->string('jenis_hutan');
            $table->string('negeri');
            $table->string('tahun');
            $table->string('attachment_permohonan');
            $table->string('dokumen_ke_luar_negara');
            $table->string('ulasan_admin');
            $table->string('ulasan_penyokong_1');
            $table->string('ulasan_penyokong_2');
            $table->string('ulasan_ketua_pengarah');
            $table->string('no_rujukan');
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
        Schema::dropIfExists('permohonans');
    }
}
