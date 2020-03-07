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
            $table->string('gender');
            $table->string('phone_number');
            $table->string('password');
            $table->string('identify_number');
            $table->string('email');
            $table->string('priority');
            $table->string('admission');
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
