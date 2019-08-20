<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFriendsAndFamilyRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('hospital_ratings')) {
            Schema::table('hospital_ratings', function (Blueprint $table) {
                //Add the Special Offers flag
            $table->double('friends_family_rating')->default(null)->after('latest_rating')->nullable();
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
        if (Schema::hasTable('hospital_ratings')) {
            Schema::table('hospital_ratings', function (Blueprint $table) {
                //Drop the column 'special_offers'
                $table->dropColumn('friends_family_rating');
            });
        }
    }
}
