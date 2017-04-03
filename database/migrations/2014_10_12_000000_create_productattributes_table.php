<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductattributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_productattrib', function (Blueprint $table) {
            $table->increments('wl_id');
            $table->smallInteger('wl_pr_id');
			$table->smallInteger('wl_us_id');
			$table->smallInteger('wl_we_id');
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
        Schema::drop('ab_wishlist');
    }
}
