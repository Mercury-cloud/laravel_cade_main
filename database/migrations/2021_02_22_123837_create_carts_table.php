<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('billing_address_id');
            $table->integer('delivery_address_id');
            $table->integer('carrier_id');
            $table->decimal('shipping_price',20,2)->default(0);
            $table->decimal('total_products_price',20,2)->default(0);
            $table->decimal('total_shipping_price',20,2)->default(0);
            $table->decimal('total_discounts',20,2)->default(0);
            $table->decimal('total_price',20,2)->default(0);
            $table->decimal('tax_rate',10,2)->default(0);
            $table->string('secure_key','32');
            $table->boolean('locked')->default(false);
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
        Schema::dropIfExists('carts');
    }
}
