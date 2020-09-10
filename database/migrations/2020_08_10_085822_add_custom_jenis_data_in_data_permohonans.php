<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomJenisDataInDataPermohonans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_permohonans', function (Blueprint $table) {
          $table->string('custom_jenis_data')->nullable();
          $table->string('custom_tahun')->nullable();
          $table->string('saiz_data')->nullable();
          $table->string('jumlah_harga_data')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_permohonans', function (Blueprint $table) {
          $table->dropColumn('custom_jenis_data');
          $table->dropColumn('custom_tahun');
          $table->dropColumn('saiz_data');
          $table->dropColumn('jumlah_harga_data');

        });
    }
}
