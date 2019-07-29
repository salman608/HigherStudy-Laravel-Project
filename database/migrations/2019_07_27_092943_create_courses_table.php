<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
          $table->bigIncrements('id');

          $table->integer('department_id');
          $table->integer('university_id');


          $table->string('course_fee');
          $table->integer('Seat');
          $table->string('date');
          $table->string('app_link');
          $table->longText('apply_process');
          $table->longText('requirment');
          $table->longText('professor');
          $table->longText('financial');
          $table->longText('schoolarship');
          $table->longText('accomodation');


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
