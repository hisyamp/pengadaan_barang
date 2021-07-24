<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_products', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi_in');
            $table->integer('supplier_id');
            $table->integer('user_id');
            $table->string('barang_id');
            $table->integer('jumlah_masuk');
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
        Schema::dropIfExists('in_products');
    }
}
