<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_category', function (Blueprint $table) {
            $table->increments('ab_cat_id');
            $table->smallInteger('ca_id');
			$table->string('ca_name',150);
			$table->string('ca_desc',150);
			$table->string('ca_url',150);
			$table->smallInteger('ca_order');
			$table->smallInteger('ca_status');
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
        Schema::drop('ab_category');
    }
}
