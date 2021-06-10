<?php

namespace App\Http\Controllers;

use App\Models\Zamowienie;
use App\Models\Zamowienie_menu;
use Illuminate\Http\Request;
use \App\Models\Menu;
use MongoDB\Driver\Session;

class kelnerController extends Controller
{
    function pokazTables(){
        return view('kelner_views/kelner');
    }

    function zapiszIDStolika($id){
        Session()->forget('idStolik');
        Session()->forget('idDania');
        Session()->put('idStolik', $id);
        Session()->put('suma',0.00);

        return redirect(url('kelnermenu'));
    }

    function pokazKategorie(){
        return view('kelner_views/kelner2');
    }

    function usunDanie($id)
    {
        $tab=Session()->pull('idDania');
        $i=0;
        $d=Menu::find($id);
        Session()->put('suma',Session()->get('suma')-$d->cena);
        foreach ($tab as $danie)
        {
            if($danie==$id)
            {
                unset($tab[$i]);
                break;
            }
            $i++;
        }
        foreach ($tab as $danie)
        {
            Session()->push('idDania', $danie);
        }
        return(redirect(url() -> previous()));

    }

    function dodajZamowienie()
    {
        $zamowienie=new Zamowienie;
        $zamowienie->stolik_id=session()->get('idStolik');
        $zamowienie->uzytkownik_id=session()->get('userID');
        $zamowienie->status_id=1;
        $zamowienie->save();
        foreach(Session()->get('idDania')as $dania)
        {
            $danie=new Zamowienie_menu;
            $danie->menu_id=$dania;
            $danie->zamowienie_id=$zamowienie->id;
            $danie->save();

        }

        Session()->forget('idStolik');
        Session()->forget('idDania');
        return(redirect(url('kelner-zamowienia')));
    }

    function dodaj_danie($id){

        Session()->push('idDania', $id);
        Session()->push('cena',Menu::findOrFail($id)->cena);
        $d=Menu::find($id);
        Session()->put('suma',Session()->get('suma')+$d->cena);

        return(redirect(url() -> previous()));

    }

    function usunZamowienie()
    {
        Session()->forget('idStolik');
        Session()->forget('idDania');
        return(redirect(url('kelner')));
    }
}
