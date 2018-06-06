<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            // 3 Email IDs
            $table->string('email1');
            $table->string('email2');
            $table->string('email3');
            // 3 Phone Nos
            $table->string('phone1');
            $table->string('phone2');
            $table->string('phone3');
            // Profile Address
            $table->string('address');
            // Profile Hours
            $table->string('regular');
            $table->string('weekend');
            // Social Media Profile
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('linkedin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
