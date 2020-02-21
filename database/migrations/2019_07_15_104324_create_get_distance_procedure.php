<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGetDistanceProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("DROP function IF EXISTS get_distance");
        $procedure = "
            CREATE FUNCTION get_distance(lat float, lng float, pnt_lat float, pnt_lng float)

            Returns float
            READS SQL DATA
            DETERMINISTIC

            BEGIN
            Declare dist float;
            SET dist =
              3959 * acos (
              cos ( radians(pnt_lat) )
              * cos( radians( lat ) )
              * cos( radians( lng ) - radians(pnt_lng) )
              + sin ( radians(pnt_lat) )
              * sin( radians( lat ) )
            );

            RETURN dist;

            END
        ";

        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP function IF EXISTS get_distance");
    }
}
