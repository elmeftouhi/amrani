<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->boolean('is_new')->default(0);
            $table->integer('client_type_id')->nullable()->default(0);
            $table->string('source')->nullable();
            $table->string('source_reference')->nullable();
            $table->string('client_telephone_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn('is_new', 'client_type_id', 'source', 'source_reference');
        });
    }
}
