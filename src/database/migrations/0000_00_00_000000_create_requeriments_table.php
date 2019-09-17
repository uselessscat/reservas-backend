<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequerimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requeriments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('service_id');

            $table->bigInteger('requeriment_id');
            $table->enum('requeriment_type', [
                'role',
                'equipment',
                'place',
            ]);
            $table->integer('count')->default(1);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requeriments');
    }
}
