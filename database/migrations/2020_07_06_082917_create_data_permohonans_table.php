<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_permohonans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('senarai_harga_id')->unsigned()->nullable();
            $table->foreign('senarai_harga_id')->references('id')->on('senarai_hargas');
            $table->bigInteger('permohonan_id')->unsigned()->nullable();
            $table->foreign('permohonan_id')->references('id')->on('permohonans');
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
        Schema::dropIfExists('data_permohonans');
    }
}
