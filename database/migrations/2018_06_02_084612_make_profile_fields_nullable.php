<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeProfileFieldsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('profiles', function (Blueprint $table) {
            // 3 Email IDs
            $table->string('email1')->nullable()->change();
            $table->string('email2')->nullable()->change();
            $table->string('email3')->nullable()->change();
            // 3 Phone Nos
            $table->string('phone1')->nullable()->change();
            $table->string('phone2')->nullable()->change();
            $table->string('phone3')->nullable()->change();
            // Social Media Profile
            $table->string('facebook')->nullable()->change();
            $table->string('instagram')->nullable()->change();
            $table->string('twitter')->nullable()->change();
            $table->string('linkedin')->nullable()->change();
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
    }
}
