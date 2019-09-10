<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEnquiryColumns2 extends Migration
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
                $table->boolean('waiting_time_self')->default(0)->after('waiting_time')->nullable();
                $table->boolean('consultants')->default(0)->after('waiting_time_self')->nullable();
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
                $table->dropColumn('waiting_time_self');
                $table->dropColumn('consultants');
            });
        }
    }
}
