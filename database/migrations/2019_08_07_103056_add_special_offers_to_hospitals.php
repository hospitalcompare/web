<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSpecialOffersToHospitals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('hospitals')) {
            Schema::table('hospitals', function (Blueprint $table) {
                //Add the Special Offers flag
                $table->boolean('special_offers')->default(0)->after('url')->nullable();
            });
            //Add this flag random for each 3 hospitals
            \DB::statement('UPDATE hospitals SET special_offers = 1 WHERE hospital_type_id = 2 AND id % 3 = 0');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('hospitals')) {
            Schema::table('hospitals', function (Blueprint $table) {
                //Drop the column 'special_offers'
                $table->dropColumn('special_offers');
            });
        }
    }
}
