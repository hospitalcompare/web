<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnquiries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('enquiries')) {
            Schema::create('enquiries', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('specialty_id')->nullable();
                $table->unsignedInteger('hospital_id');
                $table->enum('title', ['Mr', 'Mrs', 'Miss', 'Ms', 'Dr', 'Prof.', 'Rev.']);
                $table->string('first_name');
                $table->string('last_name');
                $table->string('email');
                $table->string('phone_number');
                $table->string('postcode');
                $table->enum('reason', ['waiting_time_nhs_funded', 'price_range', 'waiting_time_self_pay', 'consultants', 'other'])->default("other");
                $table->text('additional_information')->nullable();
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('specialty_id')->references('id')->on('specialties')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('enquiries');
    }
}
