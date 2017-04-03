<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialmediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_socialmedia', function (Blueprint $table) {
            $table->increments('sm_id');
			$table->string('sm_name',100);
			$table->string('sm_link',100);
			$table->string('sm_image',100);
			$table->string('sm_icon',100);
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
        Schema::drop('ab_socialmedia');
    }
}
