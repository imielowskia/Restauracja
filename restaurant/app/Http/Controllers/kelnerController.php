<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Menu;
class kelnerController extends Controller
{
    function pokazTables(){
        return view('kelner_views/kelner');
    }

    function zapiszIDStolika($id){
        Session()->put('idStolik', $id);

        return redirect(url('kelnermenu'));
    }

    function pokazKategorie(){
        return view('kelner_views/kelner2');
    }

    function usunDanie($id)
    {
        Session()->forget('idDania');

        return(redirect(url() -> previous()));
    }

    function dodaj_danie($id){
        Session()->push('idDania', $id);
        Session()->push('cena',Menu::findOrFail($id)->cena);
        return(redirect(url() -> previous()));

    }
}
