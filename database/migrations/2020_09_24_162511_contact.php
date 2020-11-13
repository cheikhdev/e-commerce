<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->unsignedBigInteger('user_id');
           
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('objet');
            $table->string('message');
            
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
        Schema::dropIfExists('contacts');
    }
}
