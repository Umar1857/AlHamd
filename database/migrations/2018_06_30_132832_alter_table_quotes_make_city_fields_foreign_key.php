<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableQuotesMakeCityFieldsForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->integer('moving_from')->unsigned()->change();
            $table->foreign('moving_from')->references('id')->on('cities');

            $table->integer('moving_to')->unsigned()->change();
            $table->foreign('moving_to')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->dropForeign('quotes_moving_from_foreign');
            $table->string('moving_from')->change();

            $table->dropForeign('quotes_moving_to_foreign');
            $table->string('moving_to')->change();
        });
    }
}
