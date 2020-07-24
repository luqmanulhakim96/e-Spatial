<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenisKepadaInSenaraiEmails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('senarai_emails', function (Blueprint $table) {
          $table->string('jenis');
          $table->string('kepada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('senarai_emails', function (Blueprint $table) {
          $table->dropColumn('jenis');
          $table->dropColumn('kepada');
        });
    }
}
