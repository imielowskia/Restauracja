<?php

namespace App\Http\Controllers;

use App\Models\Zamowienie;
use Illuminate\Http\Request;

class KasaController extends Controller
{
    public function index() {

        $zamowienia = Zamowienie::where('zaplacone', 0)->get();

        return view('kasa/index', ['zamowienia' => $zamowienia]);
    }

    public function zaplac(Request $request)
    {
        Zamowienie::where('id', $request->get("id"))->update(['zaplacone' => true]);
        echo 'Zaplacono za zamowienie o numerze ' . ($request->get("id"));
    }
}
