<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_weight', function (Blueprint $table) {
            $table->increments('ab_we_id');
			$table->string('we_name',150);
			$table->smallInteger('we_status');
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
        Schema::drop('ab_weight');
    }
}
