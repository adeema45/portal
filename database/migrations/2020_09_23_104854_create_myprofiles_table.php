<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myprofiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',191);
            $table->string('last_name',191);
            $table->string('address',191);
            $table->string('cell',14);
            $table->string('dob',11);
            $table->string('user_id',11);
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
        Schema::dropIfExists('myprofiles');
    }
}
