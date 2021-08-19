<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseexpertTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courseexpert_times', function (Blueprint $table) {


            $table->id('time_id');
            $table->unsignedBigInteger('courseexpert_id');
            $table->string('day');
            $table->string('time');               
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
        Schema::dropIfExists('courseexpert_times');
    }
}
