<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_contact', function (Blueprint $table) {
            $table->increments('co_id');
			$table->string('co_name',100);
			$table->string('co_email',100);
			$table->string('co_mobile',100);
			$table->string('co_landline',100);
			$table->string('co_address',100);
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
        Schema::drop('ab_contact');
    }
}
