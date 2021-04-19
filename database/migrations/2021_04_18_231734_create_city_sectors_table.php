<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitySectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_sectors', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->string('city_sector_name_fr');
            $table->string('city_sector_name_ar');
            $table->boolean('city_sector_status')->default(1);
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city_sectors');
    }
}
