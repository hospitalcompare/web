<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPlaceIndicators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create Table `place_ratings`
        if (!Schema::hasTable('hospital_place_ratings')) {
            Schema::create('hospital_place_ratings', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('hospital_id');
                $table->double('cleanliness')->nullable();
                $table->double('food_hydration')->nullable();
                $table->double('privacy_dignity_wellbeing')->nullable();
                $table->double('condition_appearance_maintenance')->nullable();
                $table->double('dementia')->nullable();
                $table->double('disability')->nullable();
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade')->onUpdate('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_place_ratings');
    }
}
