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

        Schema::table('contacts', function (Blueprint $table) {
            $table->foreign('contact_type_id')->references('id')->on('contact_types');
        });

        Schema::table('requeriments', function (Blueprint $table) {
            $table->foreign('service_id')->references('id')->on('services');
        });

        Schema::table('appointments', function (Blueprint $table) {
            $table->foreign('person_id')->references('id')->on('persons');
            $table->foreign('service_id')->references('id')->on('services');
        });

        Schema::table('appointment_requeriments', function (Blueprint $table) {
            $table->foreign('appointment_id')->references('id')->on('appointments');
            $table->foreign('requeriment_id')->references('id')->on('requeriments');
        });

        Schema::table('person_roles', function (Blueprint $table) {
            $table->foreign('branch_office_id')->references('id')->on('branch_offices');
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
