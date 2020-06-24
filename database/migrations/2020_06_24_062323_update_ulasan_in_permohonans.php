<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUlasanInPermohonans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permohonans', function (Blueprint $table) {
          $table->string('ulasan_admin')->nullable()->change();
          $table->string('ulasan_penyokong_1')->nullable()->change();
          $table->string('ulasan_penyokong_2')->nullable()->change();
          $table->string('ulasan_ketua_pengarah')->nullable()->change();
          $table->string('no_rujukan')->nullable()->change();
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
            $table->dropColumn('ulasan_admin');
            $table->dropColumn('ulasan_penyokong_1');
            $table->dropColumn('ulasan_penyokong_2');
            $table->dropColumn('ulasan_ketua_pengarah');
            $table->dropColumn('no_rujukan');
        });
    }
}
