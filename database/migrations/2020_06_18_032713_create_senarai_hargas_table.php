<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenaraiHargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senarai_hargas', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_data');
            $table->integer('saiz_data');
            $table->string('negeri');
            $table->string('tahun');
            $table->decimal('harga_asas',10,2);
            $table->decimal('jumlah_harga',10,2);
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
        Schema::dropIfExists('senarai_hargas');
    }
}
