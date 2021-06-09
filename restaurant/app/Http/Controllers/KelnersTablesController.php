<?php

namespace App\Http\Controllers;

use App\Models\uzytkownicy;
use App\Models\stoliki;
use App\Models\uzytkownicy_stolik;
use Illuminate\Http\Request;

class KelnersTablesController extends Controller
{
    function showKelners(){
        $objects = uzytkownicy::where('pozycja_id', 1) -> get();
        $title = 'Kelnerzy i ich stoliki';
        $columnsHead = [ '#',  'Imię', 'Nazwisko', 'Stoliki' ];
        $columnsBody = [ 'id',  'imie', 'nazwisko', 'stoliki' ];
        $manage = [ 'edit' => true, 'delete' => false, 'add' => false ];

        foreach($objects as $o){
            $o->stoliki = '';
            foreach(uzytkownicy_stolik::where('uzytkownik_id', $o -> id) -> orderBy('stolik_id') -> get() as $stolik)
                $o -> stoliki .= stoliki::find($stolik->stolik_id) -> numer . ', ';
            if($o -> stoliki == '')
                $o -> stoliki = 'Brak stolików!';
            else
                $o -> stoliki = substr($o->stoliki, 0, -2);
        
        }

        return view('admin.sthToShow', compact('objects', 'title', 'columnsHead', 'columnsBody', 'manage'));
    }

    function editAssigments($id){
        if(stoliki::all()->count() == 0)
            return redirect(url('admin/autoTables/generateTables'));

        $data = stoliki::all();

        foreach($data as $table){
            if(uzytkownicy_stolik::where('uzytkownik_id', $id) -> where('stolik_id', $table -> id) -> get() -> count() == 1)
                $table -> dostep = "TAK";
            else
                $table -> dostep = "NIE";
        }

        $objects = $data;
        $title = 'Zmiana przyporządkowania dla ' . uzytkownicy::find($id) -> imie . ' ' . uzytkownicy::find($id) -> nazwisko;
        $columnsHead = [ '#',  'Nazwa stolika', 'Dostęp' ];
        $columnsBody = [ 'id',  'numer', 'dostep' ];
        $manage = [ 'edit' => true, 'delete' => false, 'add' => false ];

        return view('admin.sthToShow', compact('objects', 'title', 'columnsHead', 'columnsBody', 'manage'));
    }

    function zmienPrzypisanie($idc, $idt){
        if(uzytkownicy_stolik::where('uzytkownik_id', $idc) -> where('stolik_id', $idt) -> get() -> count() == 0){
            $temp = [
                'stolik_id' => $idt,
                'uzytkownik_id' => $idc
            ];

            uzytkownicy_stolik::create($temp);
        }
        else{
            $temp = uzytkownicy_stolik::where('uzytkownik_id', $idc) -> where('stolik_id', $idt) -> get();
            foreach($temp as $tmp)
                $tmp -> delete();
        }

        return redirect(url()->previous());
    }
}
