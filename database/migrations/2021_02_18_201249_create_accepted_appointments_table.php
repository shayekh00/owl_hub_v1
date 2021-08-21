<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcceptedAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accepted_appointments', function (Blueprint $table) {
            $table->id('accepted_appointment_id');
            $table->string('problem_text');
            $table->string('drive_link');
            $table->string('deadline_date');
            $table->unsignedBigInteger('courseexpert_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('student_id');


            $table->string('appointment_timing');

            $table->unsignedBigInteger('appointment_hours');
            $table->string('appointment_transaction_id');
            $table->integer('is_confirmed');
            $table->integer('is_finished');

            $table->integer('is_accepted');

            $table->timestamps();
            // $table->foreign('requested_appointment_id')->references('requested_appointment_id')->on('requested_appointments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accepted_appointments');
    }
}
