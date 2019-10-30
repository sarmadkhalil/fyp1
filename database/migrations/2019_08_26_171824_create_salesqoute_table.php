<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesqouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesqoute', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->default('new');
            $table->bigInteger('customer_id');
            $table->bigInteger('product_id');
            $table->integer('quantity');
            $table->string('description')->default('new');
            $table->integer('total')->default('0');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('salesqoute');
    }
}
