<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',128);
            $table->string('reference',32);
            $table->string('ean13',13)->default(null);
            $table->integer('category_default_id')->unsigned();
            $table->integer('manufacturer_id')->unsigned();
            $table->integer('quantity')->unsigned()->default(0);
            $table->decimal('wholesale_price',20,2)->default(0);
            $table->decimal('price',20,2)->default(0);
            $table->text('description')->default(null);
            $table->text('description_short')->default(null);
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
        Schema::dropIfExists('products');
    }
}
