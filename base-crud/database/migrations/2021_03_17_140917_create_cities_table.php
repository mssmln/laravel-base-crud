<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id(); //c'era già
            $table->string('name',20);
            $table->bigInteger('population');
            $table->float('area',4,1);
            $table->string('weather',50)->nullable()->default('mild');
            $table->string('area_code',10);
            $table->timestamps(); //c'era già
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
