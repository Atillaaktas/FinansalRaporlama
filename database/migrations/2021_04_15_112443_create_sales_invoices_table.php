<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('customerId');
            $table->string('customerName');
            $table->integer('stockId');
            $table->string('stockName');
            $table->integer('piece');
            $table->integer('baseAmount');
            $table->integer('total');
            $table->integer('tax');
            $table->integer('salesmanId');
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
        Schema::dropIfExists('sales_invoices');
    }
}
