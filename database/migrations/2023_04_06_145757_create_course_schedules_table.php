<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->text('photo')->nullable();
            $table->text('level')->nullable();
            $table->text('start_date')->nullable();
            $table->text('course_time')->nullable();
            $table->text('course_day')->nullable();
            $table->text('duration')->nullable();
            $table->text('capacity')->nullable();
            $table->text('location')->nullable();
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
        Schema::dropIfExists('course_schedules');
    }
}
