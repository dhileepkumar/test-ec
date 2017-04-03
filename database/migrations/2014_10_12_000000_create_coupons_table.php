<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_coupons', function (Blueprint $table) {
            $table->increments('cu_id');
			$table->smallInteger('cu_type');
			$table->string('cu_name');
			$table->float('cu_amt');
			$table->float('ce_desc');
			$table->dateTime('cu_from');
			$table->dateTime('cu_to');
			$table->dateTime('cu_user_count');
			$table->dateTime('cu_used');
			$table->smallInteger('created_by');
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
        Schema::drop('ab_coupons');
    }
}
