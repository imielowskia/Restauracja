<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasaController extends Controller
{
    public function index() {
        //todo: pobierac te dane z bazy danych
        $stoliki = [
            ['numer' => 1, 'suma' => 55.49, 'zarchiwizowane' => false],
            ['numer' => 2, 'suma' => 44.49, 'zarchiwizowane' => false],
            ['numer' => 3, 'suma' => 33.49, 'zarchiwizowane' => false],
            ['numer' => 4, 'suma' => 66.49, 'zarchiwizowane' => true],
        ];

        return view('kasa/index', ['stoliki' => $stoliki]);
    }

    public function zarchiwizuj(Request $request) {
        echo 'zarchiwizowano zamowienie o numerze ' . ($request->get("id"));
    }

    public function zaplac(Request $request) {
        echo 'Zaplacono za zamowienie o numerze ' . ($request->get("id"));
    }
}
