<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttachmentPenerimaanDataUserInPermohonans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permohonans', function (Blueprint $table) {
          $table->string('attachment_penerimaan_data_user')->nullable();
          $table->string('catatan_harga')->nullable();


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
          $table->dropColumn('attachment_penerimaan_data_user');
          $table->dropColumn('catatan_harga');

        });
    }
}
