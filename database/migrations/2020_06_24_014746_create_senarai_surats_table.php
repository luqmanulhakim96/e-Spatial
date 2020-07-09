<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenaraiSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senarai_surats', function (Blueprint $table) {
            $table->id();
            $table->string('nombor_rujukan');
            $table->string('tarikh');
            $table->text('kandungan');
            // $table->text('tajuk_surat');
            // $table->text('perenggan_satu')->nullable();
            // $table->text('perenggan_dua')->nullable();
            // $table->text('perenggan_tiga')->nullable();
            // $table->text('perenggan_empat')->nullable();
            // $table->text('perenggan_lima')->nullable();
            // $table->text('penutup');
            // $table->string('nama_tandatangan');
            // $table->string('jawatan_tandatangan');
            // $table->string('surat_kepada')->nullable();
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
        Schema::dropIfExists('senarai_surats');
    }
}
