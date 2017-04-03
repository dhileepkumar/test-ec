<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagessettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_imgsettings', function (Blueprint $table) {
            $table->increments('is_id');
			$table->string('is_favicon',100);
			$table->string('is_logo',100);
			$table->string('is_noimg',100);
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
        Schema::drop('ab_imgsettings');
    }
}
