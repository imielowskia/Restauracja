<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToZamowieniaMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zamowienia_menu', function (Blueprint $table) {
            $table->foreign('menu_id')->references('id')->on('menu');
            $table->foreign('zamowienie_id')->references('id')->on('zamowienia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('zamowienia_menu', function (Blueprint $table) {
            //
        });
    }
}
