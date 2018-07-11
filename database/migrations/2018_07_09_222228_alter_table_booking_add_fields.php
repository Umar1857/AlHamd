<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableBookingAddFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('number');
            $table->text('description');
            $table->date('moving_date');
            $table->time('moving_time');

            $table->string('moving_from_address');
            $table->integer('moving_from')->unsigned();
            $table->foreign('moving_from')->references('id')->on('cities');

            $table->string('moving_to_address');
            $table->integer('moving_to')->unsigned();
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
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('fname');
            $table->dropColumn('lname');
            $table->dropColumn('email');
            $table->dropColumn('number');
            $table->dropColumn('description');
            $table->dropColumn('moving_date');
            $table->dropColumn('moving_time');

            $table->dropColumn('moving_from_address');
            $table->dropForeign('bookings_moving_from_foreign');
            $table->dropColumn('moving_from');

            $table->dropColumn('moving_to_address');
            $table->dropForeign('bookings_moving_to_foreign');
            $table->dropColumn('moving_to');
        });
    }
}
