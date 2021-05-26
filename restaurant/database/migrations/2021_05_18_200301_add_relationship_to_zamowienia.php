<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToZamowienia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zamowienia', function (Blueprint $table) {
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
        Schema::table('zamowienia', function (Blueprint $table) {
            //
        });
    }
}
