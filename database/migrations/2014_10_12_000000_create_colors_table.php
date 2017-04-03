<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_colors', function (Blueprint $table) {
            $table->increments('ab_co_id');
            $table->smallInteger('ab_pr_id');
			$table->string('col_name',150);
			$table->integer('col_qty');
			$table->integer('col_qty_init');
			$table->integer('col_qty_used');
			$table->string('col_img',150);
			$table->smallInteger('col_status');
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
        Schema::drop('ab_colors');
    }
}
