<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCorporateContentProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create the corporate_content table
        if (!Schema::hasTable('hospital_corporate_content')) {
            Schema::create('hospital_corporate_content', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('hospital_id');
                $table->longText('profile');
                $table->dateTime('start_date')->default(\DB::raw('CURRENT_TIMESTAMP'));
                $table->dateTime('end_date')->default(\DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('hospital_corporate_content');
    }
}
