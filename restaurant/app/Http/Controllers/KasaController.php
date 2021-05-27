<?php

namespace App\Http\Controllers;

use App\Models\Zamowienie;
use Illuminate\Http\Request;

class KasaController extends Controller
{
    public function index() {

        $zamowienia = Zamowienie::all();

        return view('kasa/index', ['zamowienia' => $zamowienia]);
    }


/*
    public function zarchiwizuj(Request $request) {
        echo 'zarchiwizowano zamowienie o numerze ' . ($request->get("id"));
    }
*/
    public function zaplac(Request $request)
    {
        echo 'Zaplacono za zamowienie o numerze ' . ($request->get("id"));
    }
}

