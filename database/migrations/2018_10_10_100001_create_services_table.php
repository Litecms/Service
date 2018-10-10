<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: services
         */
        Schema::create(config('litecms.service.service.model.table'), function ($table) {
            $table->increments('id');
            $table->text('title')->nullable();
            $table->text('icon')->nullable();
            $table->text('heading')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('slug')->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop(config('litecms.service.service.model.table'));
    }
}
