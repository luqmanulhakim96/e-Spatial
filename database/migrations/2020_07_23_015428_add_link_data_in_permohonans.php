<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLinkDataInPermohonans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permohonans', function (Blueprint $table) {
          $table->string('link_data')->nullable();

          $table->string('tarikh_permohonan')->nullable();
          $table->string('tarikh_pentadbir_sistem')->nullable();
          $table->string('tarikh_penyokong_1')->nullable();
          $table->string('tarikh_penyokong_2')->nullable();
          $table->string('tarikh_ketua_pengarah')->nullable();
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
          $table->dropColumn('link_data');
        });
    }
}
