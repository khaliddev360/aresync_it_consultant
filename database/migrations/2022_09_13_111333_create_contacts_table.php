<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('Company')->nullable();
            $table->string('Email')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Interestedservices')->nullable();
            $table->string('InterestedQs')->nullable();
            $table->string('ChooseaBudgetUSD')->nullable();
            $table->string('ProjectDetail')->nullable();
            $table->string('file')->nullable();
            $table->string('checkbox')->nullable();
            $table->string('needNDA')->nullable();
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
};