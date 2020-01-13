<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->unsignedBigInteger('user_id');
            $table->integer('prix_total');
            $table->string('nom_client');
            $table->string('prenom_client');
            $table->string('Adresse_client');
            $table->integer('num_tel');
            $table->unsignedInteger('admin_id');
            $table->unsignedInteger('delivery_id');
            
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
        Schema::dropIfExists('orders');
    }
}
