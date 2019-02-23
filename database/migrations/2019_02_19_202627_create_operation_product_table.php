<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation_product', function (Blueprint $table) {
            $table->integer('operation_id');
            $table->string('product_name');
            $table->integer('rquantity');
            $table->integer('aquantity')->nullable();
            $table->boolean('status')->default(false);
            $table->string('user_name');

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
        Schema::dropIfExists('operation_product');
    }
}
