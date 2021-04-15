<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('sellerId');
            $table->string('sellerName');
            $table->integer('stockId');
            $table->string('stockName');
            $table->integer('piece');
            $table->integer('baseAmount');
            $table->integer('total');
            $table->integer('tax');
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
        Schema::dropIfExists('purchase_invoices');
    }
}
