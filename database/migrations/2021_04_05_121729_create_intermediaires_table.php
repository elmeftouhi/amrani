<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntermediairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intermediaires', function (Blueprint $table) {
            $table->id();
            $table->string('intermediaire_code');
            $table->integer('intermediaire_category_id');
            $table->integer('intermediaire_status_id');
            $table->string('intermediaire_name');
            $table->string('intermediaire_telephone');
            $table->string('intermediaire_city');
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
        Schema::dropIfExists('intermediaires');
    }
}
