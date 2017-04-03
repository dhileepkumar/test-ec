<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_cms', function (Blueprint $table) {
            $table->increments('cms_id');
			$table->string('cms_name',30);
			$table->text('cms_desc');
            $table->smallInteger('cms_position');
			$table->smallInteger('cms_status');
			$table->smallInteger('created_by');
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
        Schema::drop('ab_cms');
    }
}
