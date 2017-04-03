<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_cart', function (Blueprint $table) {
            $table->increments('ab_ca_id');
            $table->integer('pr_id');
			$table->integer('pr_art_id');
			$table->integer('pr_clr_id');
			$table->integer('pr_qt_id');
			$table->integer('pr_quantity');
			$table->smallInteger('creted_by');
			$table->smallInteger('updated_by');
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
        Schema::drop('ab_cart');
    }
}
