<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('phone');
            $table->string('name'); 
            $table->string('surname');
            $table->integer('region_id');
            $table->integer('city_id');
            $table->integer('status')->default('0'); 
            $table->timestamps();
            
            $table->json('diagnos_main')->nullable();
            $table->json('diagnos_eye')->nullable();
            $table->json('diagnos_card  iolog')->nullable();
            $table->json('diagnos_xray')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
