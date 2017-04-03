<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_sitesettings', function (Blueprint $table) {
            $table->increments('ss_id');
			$table->string('ss_title',150);
			$table->string('ss_slogan',255);
			$table->string('ss_off_msg',300);
			$table->string('ss_meta_title',300);
			$table->string('ss_meta_tag',300);
			$table->string('ss_meta_desc',300);
			$table->text('ss_google_act');
			$table->text('ss_alexa_code');
			$table->text('ss_pixel_code');
			$table->smallInteger('ss_currency');
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
        Schema::drop('ab_sitesettings');
    }
}
