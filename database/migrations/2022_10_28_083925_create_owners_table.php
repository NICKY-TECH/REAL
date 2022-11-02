<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('Name');
            $table->string('Phone_Number');
            $table->longText('Facebook_Account')->nullable();
            $table->longText('Twitter_Account')->nullable();
            $table->longText('Linkedln')->nullable();
            $table->longText('Gmail_Account');
            $table->longText('Office_Address');
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
        Schema::dropIfExists('owners');
    }
}
