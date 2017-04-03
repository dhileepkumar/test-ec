<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_product', function (Blueprint $table) {
            $table->increments('pr_id');
			$table->string('pr_name',200);
			$table->string('pr_metatitle',200);
			$table->string('pr_metadescription',300);
			$table->string('pr_srtdesc',100);
			$table->text('pr_longdesc');
			$table->smallInteger('pr_ct_id');
			$table->float('pr_price');
			$table->float('pr_dis');
			$table->string('pr_manufacturer',200);
			$table->smallInteger('pr_qty');
			$table->string('pr_img',100);
			$table->smallInteger('pr_status');
			$table->smallInteger('pr_hits');
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
        Schema::drop('ab_product');
    }
}
