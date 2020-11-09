<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('campus_id',2);
            $table->string('class_id',3);
            $table->string('name');
            $table->string('fhname');
            $table->string('gender',1);
            $table->string('address',191);
            $table->string('cnic',15);
            $table->date('dob');
            $table->date('doj');
            $table->string('cellno',255)->nullable();
            $table->string('llno', 255);
            $table->string('designation',70);
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
        Schema::dropIfExists('teachers');
    }
}
