<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbInit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Check if the Table `hospital_types` exists
        if (!Schema::hasTable('hospital_types')) {
            Schema::create('hospital_types', function (Blueprint $table) {
                $table->increments('id');
                $table->enum('name', ['NHS', 'Independent', 'NHS*'])->default("Independent");
                $table->string('status')->default("active");
                $table->timestamps();
            });
        }

        //Check if the Table `addresses` exists
        if (!Schema::hasTable('addresses')) {
            Schema::create('addresses', function (Blueprint $table) {
                $table->increments('id');
                $table->string('address_1');
                $table->string('address_2')->nullable();
                $table->string('city');
                $table->string('county')->nullable();
                $table->string('postcode')->nullable();
                $table->string('local_authority')->nullable();
                $table->string('region')->nullable();
                $table->string('latitude')->nullable();
                $table->string('longitude')->nullable();
                $table->string('status')->default("active");
                $table->timestamps();

            });
        }

        //Check if the Table `providers` exists
        if (!Schema::hasTable('providers')) {
            Schema::create('providers', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('address_id');
                $table->string('external_id');
                $table->string('name');
                $table->string('tel_number')->nullable();
                $table->string('url')->nullable();
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade')->onUpdate('cascade');

            });
        }

        //Check if the Table `hospitals` exists
        if (!Schema::hasTable('hospitals')) {
            Schema::create('hospitals', function (Blueprint $table) {
                $table->increments('id');
                $table->string('external_id');
                $table->unsignedInteger('hospital_type_id');
                $table->unsignedInteger('address_id');
                $table->string('ods_code')->nullable();
                $table->string('name');
                $table->string('tel_number')->nullable();
                $table->string('url')->nullable();
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('hospital_type_id')->references('id')->on('hospital_types')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade')->onUpdate('cascade');

            });
        }

        //Check if the Table `organisations` exists
        if (!Schema::hasTable('organisations')) {
            Schema::create('organisations', function (Blueprint $table) {
                $table->increments('id');
                $table->string('external_id');
                $table->string('name');
                $table->string('status')->default("active");
                $table->timestamps();

            });
        }

        //Check if the Table `trusts` exists
        if (!Schema::hasTable('trusts')) {
            Schema::create('trusts', function (Blueprint $table) {
                $table->increments('id');
                $table->string('external_id');
                $table->string('name');
                $table->string('status')->default("active");
                $table->timestamps();

            });
        }

        //Do something here
        //Check if the Table `location_links` exists
        if (!Schema::hasTable('location_links')) {
            Schema::create('location_links', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('hospital_id')->nullable();
                $table->unsignedInteger('provider_id')->nullable();
                $table->unsignedInteger('organisation_id')->nullable();
                $table->unsignedInteger('trust_id')->nullable();
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('organisation_id')->references('id')->on('organisations')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('trust_id')->references('id')->on('trusts')->onDelete('cascade')->onUpdate('cascade');

            });
        }

        //Check if the Table `hospital_ratings` exists
        if (!Schema::hasTable('hospital_ratings')) {
            Schema::create('hospital_ratings', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('hospital_id');
                $table->double('avg_user_rating');
                $table->integer('total_ratings');
                $table->integer('provider_rating')->nullable();
                $table->string('latest_rating')->nullable();
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade')->onUpdate('cascade');
            });
        }

        //Check if the Table `specialties` exists
        if (!Schema::hasTable('specialties')) {
            Schema::create('specialties', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('code')->nullable();
                $table->string('status')->default("active");
                $table->timestamps();

            });
        }

        //Check if the Table `hospital_waiting_time` exists
        if (!Schema::hasTable('hospital_waiting_time')) {
            Schema::create('hospital_waiting_time', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('hospital_id');
                $table->unsignedInteger('specialty_id');
                $table->integer('total_within_18_weeks');
                $table->integer('total_incomplete');
                $table->float('avg_waiting_weeks')->nullable();
                $table->float('perc_waiting_weeks')->nullable();
                $table->string('status')->default("active");
                $table->timestamps();

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
        //Remove all the created tables from the up() functionality (MUST BE DONE IN REVERSE ORDER)
        Schema::dropIfExists('hospital_waiting_time');
        Schema::dropIfExists('specialties');
        Schema::dropIfExists('hospital_ratings');
        Schema::dropIfExists('location_links');
        Schema::dropIfExists('trusts');
        Schema::dropIfExists('organisations');
        Schema::dropIfExists('hospitals');
        Schema::dropIfExists('providers');
        Schema::dropIfExists('addresses');
        Schema::dropIfExists('hospital_types');
    }
}
