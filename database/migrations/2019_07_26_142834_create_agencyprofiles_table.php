<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgencyprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencyprofiles', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('title');
          $table->string('subtitle');
          $table->string('email');
          $table->string('address');
          $table->string('phone');
          $table->string('website');
          $table->string('facebook');
          $table->string('twiter');
          $table->text('description');
          $table->string('image')->default('default.png');
          $table->integer('status');
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
        Schema::dropIfExists('agencyprofiles');
    }
}
