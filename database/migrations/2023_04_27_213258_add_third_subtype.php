<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddThirdSubtype extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('character_images', function(Blueprint $table) {
            $table->integer('subtype_id_3')->unsigned()->nullable()->default(null);
        });
        Schema::table('design_updates', function(Blueprint $table) {
            $table->integer('subtype_id_3')->unsigned()->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('character_images', function(Blueprint $table) {
            $table->dropColumn('subtype_id_3');
        });
        Schema::table('design_updates', function(Blueprint $table) {
            $table->dropColumn('subtype_id_3');
        });
    }
}
