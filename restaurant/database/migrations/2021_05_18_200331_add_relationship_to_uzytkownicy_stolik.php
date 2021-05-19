<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToUzytkownicyStolik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uzytkownicy_stolik', function (Blueprint $table) {
            $table->foreign('stolik_id')->references('id')->on('stoliki');
            $table->foreign('uzytkownik_id')->references('id')->on('uzytkownicy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uzytkownicy_stolik', function (Blueprint $table) {
            //
        });
    }
}
