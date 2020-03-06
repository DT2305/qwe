<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthday');
            $table->integer('gender');
            $table->string('phone_number')->unique();
            $table->string('password')->default("1");
            $table->string('identify_number')->unique();
            $table->string('email')->unique()->default("email@email.com");
            $table->integer('priority');
            $table->integer('admission_form');
            $table->string('highschool_name');
            $table->string('province');
            $table->string('district');
            $table->string('ward');
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
        Schema::dropIfExists('candidates');
    }
}
