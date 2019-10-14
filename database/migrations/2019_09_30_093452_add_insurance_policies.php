<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInsurancePolicies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create table `insurances`
        if (!Schema::hasTable('insurances')) {
            Schema::create('insurances', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('status')->default("active");
                $table->timestamps();
            });
        }

        //Create Table `policies`
        if (!Schema::hasTable('policies')) {
            Schema::create('policies', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('insurance_id');
                $table->string('name');
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('insurance_id')->references('id')->on('insurances')->onDelete('cascade')->onUpdate('cascade');
            });
        }

        //Create table `hospital_policies`
        if (!Schema::hasTable('hospital_policies')) {
            Schema::create('hospital_policies', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('policy_id');
                $table->unsignedInteger('hospital_id');
//                $table->string('value');
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('policy_id')->references('id')->on('policies')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade')->onUpdate('cascade');
            });
        }

        //Populate data with the insurances
        //Aviva
        $aviva = new App\Models\Insurance();
        $aviva->name = 'Aviva';
        $aviva->save();
        //Simply Health
        $simplyHealth = new App\Models\Insurance();
        $simplyHealth->name = 'Simply Health';
        $simplyHealth->save();
        //Axa
        $axa = new App\Models\Insurance();
        $axa->name = 'Axa';
        $axa->save();
        //Vitality Health
        $vitality = new App\Models\Insurance();
        $vitality->name = 'Vitality Health';
        $vitality->save();

        //Populate the data with Policies
        //Aviva
        $avivaPolicies = ['Personal Care', 'Select Care', 'Children', 'Express Care', 'Exclusive', 'Company Connect', 'Company Healthcover', 'Fair & Square', 'Speedy Diagnostics', 'Capital Option', 'Trust Hospital'];
        //Loop and add the Policy
        foreach($avivaPolicies as $avivaPolicy) {
            $avPolicy = new App\Models\Policy();
            $avPolicy->insurance_id = $aviva->id;
            $avPolicy->name = $avivaPolicy;
            $avPolicy->save();
        }

        //SimplyHealth
        $simplyHealthPolicies = ['Metropolitan', 'National', 'Connections'];
        foreach($simplyHealthPolicies as $simplyHealthPolicy) {
            $shPolicy = new App\Models\Policy();
            $shPolicy->insurance_id = $simplyHealth->id;
            $shPolicy->name = $simplyHealthPolicy;
            $shPolicy->save();
        }

        //Axa
        $axayHealthPolicies = ['General', 'Cataract Surgery', 'Oral Surgery', 'Diagnostic Imaging - MRI', 'Diagnostic Imaging - CT Scan', 'Diagnostic Imaging - PET Scan'];
        foreach($axayHealthPolicies as $axayHealthPolicy) {
            $axaPol = new App\Models\Policy();
            $axaPol->insurance_id = $axa->id;
            $axaPol->name = $axayHealthPolicy;
            $axaPol->save();
        }

        //Vitality Health
        $vitalityPolicies = ['Local', 'Countrywide', 'London Care'];
        foreach($vitalityPolicies as $vitalityPolicy) {
            $vitPolicy = new App\Models\Policy();
            $vitPolicy->insurance_id = $vitality->id;
            $vitPolicy->name = $vitalityPolicy;
            $vitPolicy->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_policies');
        Schema::dropIfExists('policies');
        Schema::dropIfExists('insurances');
    }
}
