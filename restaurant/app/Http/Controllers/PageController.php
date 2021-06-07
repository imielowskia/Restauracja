<?php

namespace App\Http\Controllers;

use App\Models\kategorie;
use App\Models\Menu;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        $menu = Menu::where('dostepnosc', 1) -> get();
        $kategorie = kategorie::all();

        foreach($kategorie as $key => $kat)
            if(menu::where('kategoria_id', $kat->id) -> where('dostepnosc', 1)-> get() -> count() == 0)
                unset($kategorie[$key]);

        foreach($menu as $m)
            $m -> kategoria_id = kategorie::find($m -> kategoria_id) -> nazwa;

        return view('index', compact('menu', 'kategorie'));
    }
}
