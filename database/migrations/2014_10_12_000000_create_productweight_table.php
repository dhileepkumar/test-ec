<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductweightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_pro_weight', function (Blueprint $table) {
            $table->increments('ab_pw_id');
            $table->smallInteger('ab_pr_id');
			$table->smallInteger('ab_we_id');
			$table->smallInteger('pw_pro_qty');
			$table->smallInteger('pw_pro_price');
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
        Schema::drop('ab_pro_weight');
    }
}
