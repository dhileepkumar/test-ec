<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_address', function (Blueprint $table) {
            $table->increments('ab_ad_id');
            $table->smallInteger('ab_us_id');
			$table->string('street_1',150);
			$table->string('street_2',150);
            $table->string('city',20);
            $table->string('region',15);
			$table->string('country',15);
			$table->string('postcode',10);
			$table->string('phone',30);
			$table->smallInteger('ad_type')->comment = "0-address, 1-billing address and 2-shipping address";
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
        Schema::drop('ab_address');
    }
}
