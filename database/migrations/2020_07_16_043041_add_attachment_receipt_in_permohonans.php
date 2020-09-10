<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttachmentReceiptInPermohonans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permohonans', function (Blueprint $table) {
            $table->string('attachment_receipt_pembayaran')->nullable();
            $table->string('attachment_penerimaan_data')->nullable();
            $table->text('remarks_admin')->nullable();
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
            $table->dropColumn('attachment_receipt_pembayaran');
            $table->dropColumn('attachment_penerimaan_data');
            $table->dropColumn('remarks_admin');

        });
    }
}
