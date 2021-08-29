<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseexpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        { 
            Schema::disableForeignKeyConstraints();
            
            Schema::create('courseexperts', function (Blueprint $table) {
            $table->id('courseexpert_id');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('appointment_accepted_id');
            
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            
            // $table->string('course_timing_saturday');
            // $table->string('course_timing_sunday');
            // $table->string('course_timing_monday');
            // $table->string('course_timing_tuesday');
            // $table->string('course_timing_wednesday');
            // $table->string('course_timing_thursday');
            // $table->string('course_timing_friday');

            $table->string('teachers_skype_link');

            $table->string('varification_drive_link');
            $table->string('appointment_drive_link');

            $table->integer('is_accepted');
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
        Schema::dropIfExists('courseexperts');
    }
}
