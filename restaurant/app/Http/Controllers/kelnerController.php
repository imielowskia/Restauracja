<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kelnerController extends Controller
{
    function pokazTables(){
        return view('kelner_views/kelner');
    }

    function zapiszIDStolika($id){
        Session()->put('stolik', $id);

        return redirect(url('kelnermenu'));
    }

    function pokazKategorie(){
        return view('kelner_views/kelner2');
    }

    function dodaj_danie($id){
        
        Session()->push('zamowienie', $id);

        return(redirect(url() -> previous()));

    }
}
