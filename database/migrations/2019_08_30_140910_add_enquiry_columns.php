<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEnquiryColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('enquiries')) {
            Schema::table('enquiries', function (Blueprint $table) {
                //Add the Special Offers flag
                $table->boolean('price')->default(0)->after('additional_information')->nullable();
                $table->boolean('waiting_time')->default(0)->after('price')->nullable();
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
        if (Schema::hasTable('enquiries')) {
            Schema::table('enquiries', function (Blueprint $table) {
                //Drop the column 'special_offers'
                $table->dropColumn('waiting_time');
                $table->dropColumn('price');
            });
        }
    }
}
