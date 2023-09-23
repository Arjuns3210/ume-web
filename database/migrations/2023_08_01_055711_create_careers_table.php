<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 150);
            $table->string('lastname', 150);
            $table->string('email', 100);
            $table->string('age', 5);
            $table->string('city', 150);
            $table->string('position', 150);
            $table->string('expected_salary')->nullable();
            $table->date('start_date')->nullable();
            $table->string('website')->nullable();
            $table->string('experience')->nullable();
            $table->string('application');
            $table->string('cv_path');
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
        Schema::dropIfExists('careers');
    }
}
