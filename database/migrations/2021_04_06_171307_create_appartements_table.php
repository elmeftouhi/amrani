<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartements', function (Blueprint $table) {
            $table->id();
            $table->string('appartement_code'); //  APP00001
            $table->string('appartement_type'); //  appartement/duplexe
            $table->string('appartement_etat'); //  neuf/occupe
            $table->string('appartement_situation'); // titre/milikia/contrat/miftah/contrat adlia
            $table->string('appartement_etage'); // RDC/1/2/3/4
            $table->integer('appartements_en_etage'); // 0/1/2/3
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
        Schema::dropIfExists('appartements');
    }
}
