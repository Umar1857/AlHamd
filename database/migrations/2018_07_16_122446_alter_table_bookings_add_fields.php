<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableBookingsAddFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('status');

            $table->integer('service')->unsigned();
            $table->foreign('service')->references('id')->on('services')->onDelete('cascade');

            $table->integer('item')->unsigned();
            $table->foreign('item')->references('id')->on('services')->onDelete('cascade');
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
            $table->dropColumn('status');
            $table->dropForeign('bookings_service_foreign');
            $table->dropColumn('service');

            $table->dropForeign('bookings_item_foreign');
            $table->dropColumn('item');
        });
    }
}
