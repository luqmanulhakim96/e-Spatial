<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalDataIntoUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function (Blueprint $table) {
        $table->string('role')->default("5"); //0 = pentadbir sistem, 1 = penyokong 1, 2 = penyokong 2, 3 = Ketua Pengarah, 4 = Superadmin ,5 = pemohon
        $table->string('kategori')->nullable(); //kementarian, agensi, penyelidik, ipt, orang awam
        $table->string('kad_pengenalan')->unique();
        $table->string('kerakyatan')->nullable();
        $table->date('tarikh_lahir')->nullable();
        $table->string('tempat_lahir')->nullable();
        $table->string('jawatan')->nullable();
        $table->string('alamat_kediaman')->nullable();
        $table->string('nama_kementarian')->nullable();
        $table->string('alamat_kementarian')->nullable();
        $table->string('jenis_perniagaan')->nullable();
        $table->string('no_tel_rumah')->nullable();
        $table->string('no_tel_bimbit')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('role');
        $table->dropColumn('kategori');
        $table->dropColumn('kad_pengenalan');
        $table->dropColumn('kerakyatan');
        $table->dropColumn('tarikh_lahir');
        $table->dropColumn('tempat_lahir');
        $table->dropColumn('jawatan');
        $table->dropColumn('alamat_kediaman');
        $table->dropColumn('nama_kementarian');
        $table->dropColumn('alamat_kementarian');
        $table->dropColumn('jenis_perniagaan');
        $table->dropColumn('no_tel_rumah');
        $table->dropColumn('no_tel_bimbit');
});
    }
}
