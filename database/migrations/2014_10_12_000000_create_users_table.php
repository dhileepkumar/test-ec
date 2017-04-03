<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',50);
			$table->string('last_name',50);
			$table->string('mobile_number',50);
            $table->string('email')->unique();
            $table->string('password');
			$table->smallInteger('creted_by');
			$table->smallInteger('updated_by');
			$table->smallInteger('user_type');
			$table->smallInteger('user_status')->comment = "0-Inactive, 1-Active";
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
