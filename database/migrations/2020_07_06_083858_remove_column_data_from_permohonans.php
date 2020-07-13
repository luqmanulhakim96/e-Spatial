<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnDataFromPermohonans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permohonans', function (Blueprint $table) {
            $table->dropColumn(['jenis_dokumen', 'jenis_data', 'negeri','tahun','kategori_data']);
            $table->dropForeign(['senarai_harga_id']);
            $table->string('maklumat_agensi_dan_negara')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permohonans', function (Blueprint $table) {
            $table->string('jenis_dokumen');
            $table->string('jenis_data');
            $table->string('tahun')->nullable();
            $table->string('kategori_data')->nullable();
            $table->string('negeri');
            //$table->bigInteger('senarai_harga_id')->unsigned()->nullable();
            //$table->foreign('senarai_harga_id')->references('id')->on('senarai_hargas');
            $table->dropColumn('maklumat_agensi_dan_negara');
        });
    }
}
