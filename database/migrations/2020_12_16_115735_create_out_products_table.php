<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_products', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi_out');
            $table->integer('supplier_id');
            $table->integer('user_id');
            $table->string('barang_id');
            $table->integer('jumlah_keluar');
            $table->softDeletes();
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
        Schema::dropIfExists('out_products');
    }
}
