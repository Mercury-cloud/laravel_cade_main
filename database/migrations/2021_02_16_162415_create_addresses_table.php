<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('alias');
            $table->string('company')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->integer('postcode');
            $table->longText('phone');
            $table->integer('vat_number')->nullable();
            $table->unsignedBigInteger('country_id');
            $table->boolean('is_default_billing_address')->default(false);
            $table->boolean('is_default_delivery_address')->default(false);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
