<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('courses', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });
    // }

    public function up()
    {

        Schema::create('courses', function (Blueprint $table) {
             $table->id('course_id');
            //$table->increments('course_id');
            $table->unsignedBigInteger('courseexpert_id');
            $table->unsignedBigInteger('accepted_appointment_id');

            $table->foreign('courseexpert_id')->references('courseexpert_id')->on('courseexperts');
            $table->foreign('accepted_appointment_id')->references('accepted_appointment_id')->on('accepted_appointments');

            
            $table->string('course_code1');
            $table->string('university_name1');
            $table->string('course_code2');
            $table->string('university_name2');
            $table->string('course_code3');
            $table->string('university_name3');
            $table->string('course_code4');
            $table->string('university_name4');
            $table->string('course_code5');
            $table->string('university_name5');
            $table->string('course_code6');
            $table->string('university_name6');
            $table->string('course_code7');
            $table->string('university_name7');
            $table->string('course_code8');
            $table->string('university_name8');
            // $table->foreign('courseexpert_id')->nullable()->references('courseexpert_id')->on('courseexperts');
            
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
        Schema::dropIfExists('courses');
    }
}
