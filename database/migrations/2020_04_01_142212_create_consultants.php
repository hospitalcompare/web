<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('consultants')) {
            Schema::create('consultants', function (Blueprint $table) {
                $table->increments('id');
                $table->string('gmc_code');
                $table->boolean('licenced')->default(1);
                $table->integer('years_registered')->default(1);
                $table->string('first_name');
                $table->string('last_name');
                $table->string('initials');
                $table->string('gender');
                $table->string('status')->default("active");
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('consultant_links')) {
            Schema::create('consultant_links', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('consultant_id');
                $table->unsignedInteger('hospital_id');
                $table->unsignedInteger('specialty_id');
                $table->string('email')->nullable();
                $table->string('email_secondary')->nullable();
                $table->string('phone_number')->nullable();
                $table->string('phone_number_2')->nullable();
                $table->string('data_01_description')->nullable();
                $table->string('data_02_description')->nullable();
                $table->string('data_03_description')->nullable();
                $table->string('data_04_description')->nullable();
                $table->string('data_05_description')->nullable();
                $table->string('data_06_description')->nullable();
                $table->string('data_07_description')->nullable();
                $table->string('data_08_description')->nullable();
                $table->string('data_09_description')->nullable();
                $table->string('data_10_description')->nullable();
                $table->string('data_11_description')->nullable();
                $table->string('data_12_description')->nullable();
                $table->string('data_13_description')->nullable();
                $table->string('data_14_description')->nullable();
                $table->string('data_15_description')->nullable();
                $table->string('data_16_description')->nullable();
                $table->string('data_17_description')->nullable();
                $table->string('data_18_description')->nullable();
                $table->string('data_19_description')->nullable();
                $table->string('data_20_description')->nullable();
                $table->string('data_21_description')->nullable();
                $table->string('data_22_description')->nullable();
                $table->string('data_23_description')->nullable();
                $table->string('data_24_description')->nullable();
                $table->integer('data_01')->nullable();
                $table->integer('data_02')->nullable();
                $table->integer('data_03')->nullable();
                $table->integer('data_04')->nullable();
                $table->integer('data_05')->nullable();
                $table->integer('data_06')->nullable();
                $table->integer('data_07')->nullable();
                $table->integer('data_08')->nullable();
                $table->double('data_09')->nullable();
                $table->double('data_10')->nullable();
                $table->double('data_11')->nullable();
                $table->double('data_12')->nullable();
                $table->double('data_13')->nullable();
                $table->double('data_14')->nullable();
                $table->double('data_15')->nullable();
                $table->double('data_16')->nullable();
                $table->double('data_17')->nullable();
                $table->double('data_18')->nullable();
                $table->double('data_19')->nullable();
                $table->double('data_20')->nullable();
                $table->double('data_21')->nullable();
                $table->double('data_22')->nullable();
                $table->double('data_23')->nullable();
                $table->double('data_24')->nullable();
                $table->string('data_source')->nullable();
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('consultant_id')->references('id')->on('consultants')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('specialty_id')->references('id')->on('specialties')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('consultant_links');
        Schema::dropIfExists('consultants');
    }
}
