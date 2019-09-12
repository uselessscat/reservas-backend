<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('person_roles', function (Blueprint $table) {
            $table->foreign('person_id')->references('id')->on('persons');
            $table->foreign('role_id')->references('id')->on('roles');
        });

        Schema::table('equipment_equipment_types', function (Blueprint $table) {
            $table->foreign('equipment_id')->references('id')->on('equipments');
            $table->foreign('equipment_type_id')->references('id')->on('equipment_types');
        });

        Schema::table('place_place_types', function (Blueprint $table) {
            $table->foreign('place_id')->references('id')->on('places');
            $table->foreign('place_type_id')->references('id')->on('place_types');
        });

        Schema::table('requeriments', function (Blueprint $table) {
            $table->foreign('service_id')->references('id')->on('services');
        });

        Schema::table('appointments', function (Blueprint $table) {
            $table->foreign('person_id')->references('id')->on('persons');
        });

        Schema::table('appointment_requeriments', function (Blueprint $table) {
            $table->foreign('appointment_id')->references('id')->on('appointments');
            $table->foreign('requeriment_id')->references('id')->on('requeriments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}