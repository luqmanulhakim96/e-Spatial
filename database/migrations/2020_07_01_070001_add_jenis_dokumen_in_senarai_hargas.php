<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenisDokumenInSenaraiHargas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('senarai_hargas', function (Blueprint $table) {
            $table->string('jenis_dokumen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('senarai_hargas', function (Blueprint $table) {
            $table->dropColumn('jenis_dokumen');
        });
    }
}
