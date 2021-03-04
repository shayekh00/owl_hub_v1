<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_images', function (Blueprint $table) {
            $table->increments('appointment_images_id');

            $table->unsignedBigInteger('accepted_appointment_id');

            $table->foreign('accepted_appointment_id')->references('accepted_appointment_id')->on('accepted_appointments');
            
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
        Schema::dropIfExists('appointment_images');
    }
}
