<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKategoriDataInSenaraiHargas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('senarai_hargas', function (Blueprint $table) {
            $table->string('kategori_data')->nullable();
            $table->string('tahun')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voidphp 
     */
    public function down()
    {
        Schema::table('senarai_hargas', function (Blueprint $table) {
            $table->dropColumn('kategori_data');
            $table->dropColumn('tahun');
        });
    }
}
