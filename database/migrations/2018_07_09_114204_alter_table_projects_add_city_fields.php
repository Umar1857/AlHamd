<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableProjectsAddCityFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('city');

            $table->integer('from')->unsigned();
            $table->foreign('from')->references('id')->on('cities');

            $table->integer('to')->unsigned();
            $table->foreign('to')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('city');

            $table->dropForeign('projects_from_foreign');
            $table->dropColumn('from');

            $table->dropForeign('projects_to_foreign');
            $table->dropColumn('to');
        });
    }
}
