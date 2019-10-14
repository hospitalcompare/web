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
                $table->enum('name', ['NHS', 'Independent'])->default("Independent");
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
                $table->string('latitude');
                $table->string('longitude');
                $table->string('status')->default("active");
                $table->timestamps();

            });
        }

        //Check if the Table `trusts` exists
        if (!Schema::hasTable('trusts')) {
            Schema::create('trusts', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('address_id');
                $table->string('trust_id')->nullable();
                $table->string('provider_id')->nullable();
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
                $table->string('location_id')->nullable();
                $table->string('organisation_id')->nullable();
                $table->unsignedInteger('hospital_type_id');
                $table->unsignedInteger('address_id');
                $table->unsignedInteger('trust_id');
                $table->string('ods_code')->nullable();
                $table->string('name');
                $table->string('tel_number')->nullable();
                $table->string('url')->nullable();
                $table->string('report_url')->nullable();
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('hospital_type_id')->references('id')->on('hospital_types')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('trust_id')->references('id')->on('trusts')->onDelete('cascade')->onUpdate('cascade');

            });
        }

        //Check if the Table `hospital_ratings` exists
        if (!Schema::hasTable('hospital_ratings')) {
            Schema::create('hospital_ratings', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('hospital_id');
                $table->double('avg_user_rating')->nullable();
                $table->integer('total_ratings')->nullable();
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

        //Check if the Table `hospital_cancelled_ops` exists
        if (!Schema::hasTable('hospital_cancelled_ops')) {
            Schema::create('hospital_cancelled_ops', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('hospital_id');
                $table->integer('total_cancelled_ops');
                $table->integer('total_treated_last_month');
                $table->integer('admissions');
                $table->double('perc_cancelled_ops');
                $table->double('perc_not_treated_last_month');
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade')->onUpdate('cascade');
            });
        }

        //Check if the Table `hospital_outpatients` exists
        if (!Schema::hasTable('hospital_outpatients')) {
            Schema::create('hospital_outpatients', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('hospital_id');
                $table->integer('total_responses');
                $table->integer('total_eligible');
                $table->double('perc_recommended');
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade')->onUpdate('cascade');
            });
        }

        //Check if the Table `hospital_admitted` exists
        if (!Schema::hasTable('hospital_admitted')) {
            Schema::create('hospital_admitted', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('hospital_id');
                $table->integer('total_responses');
                $table->integer('total_eligible');
                $table->double('perc_recommended');
                $table->double('perc_response_rate');
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade')->onUpdate('cascade');
            });
        }

        //Check if the Table `hospital_emergencies` exists
        if (!Schema::hasTable('hospital_emergencies')) {
            Schema::create('hospital_emergencies', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('hospital_id');
                $table->integer('total_responses');
                $table->integer('total_eligible');
                $table->float('response_rate');
                $table->double('perc_recommended');
                $table->double('perc_not_recommended');
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade')->onUpdate('cascade');
            });
        }

        //Check if the Table `hospital_maternity` exists
        if (!Schema::hasTable('hospital_maternity')) {
            Schema::create('hospital_maternity', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('hospital_id');
                $table->integer('total_responses');
                $table->integer('total_eligible');
                $table->double('perc_response_rate');
                $table->double('perc_recommended');
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
        //Remove all the created tables from the up() functionality (MUST BE DONE IN REVERSE ORDER)
        Schema::dropIfExists('hospital_maternity');
        Schema::dropIfExists('hospital_emergencies');
        Schema::dropIfExists('hospital_admitted');
        Schema::dropIfExists('hospital_outpatients');
        Schema::dropIfExists('hospital_cancelled_ops');
        Schema::dropIfExists('hospital_waiting_time');
        Schema::dropIfExists('specialties');
        Schema::dropIfExists('hospital_ratings');
        Schema::dropIfExists('hospitals');
        Schema::dropIfExists('trusts');
        Schema::dropIfExists('addresses');
        Schema::dropIfExists('hospital_types');
    }
}
