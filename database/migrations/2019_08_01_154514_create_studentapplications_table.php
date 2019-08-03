<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentapplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentapplications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name');
            $table->string('email');
            $table->string('mobile');
            $table->string('birth');
            $table->text('address');
            $table->string('s_degree');
            $table->string('s_year');
            $table->string('s_gpa');
            $table->string('h_degree');
            $table->string('h_year');
            $table->string('h_gpa');
            $table->string('g_degree');
            $table->string('g_year');
            $table->string('g_gpa');
            $table->string('m_degree');
            $table->string('m_year');
            $table->string('m_gpa');
            $table->string('ielts');
            $table->string('i_year');
            $table->string('i_score');
            $table->string('country');
            $table->string('preferdegree');
            $table->string('status');
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
        Schema::dropIfExists('studentapplications');
    }
}
