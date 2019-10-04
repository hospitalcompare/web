<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Check if the Table `hospital_types` exists
        if (!Schema::hasTable('procedures')) {
            Schema::create('procedures', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('specialty_id');
                $table->string('name');
                $table->string('status')->default("active");
                $table->timestamps();

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
        Schema::dropIfExists('procedures');
    }
}
