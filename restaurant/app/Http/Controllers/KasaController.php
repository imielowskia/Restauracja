<?php

namespace App\Http\Controllers;

use App\Models\Zamowienie;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KasaController extends Controller
{
    public function index() {

        $zamowienia = Zamowienie::where('zaplacone', 0)->get();

        $todayOrders = Zamowienie
            ::wherebetween('updated_at', [Carbon::today(), Carbon::tomorrow()])
            ->where('zaplacone', 1)
            ->get();
        $todayTotal = $this->sumOrdersPrice($todayOrders);

        return view('kasa/index', ['zamowienia' => $zamowienia, 'todayTotal' => $todayTotal]);
    }

    public function zaplac(Request $request)
    {
        Zamowienie::where('id', $request->get("id"))->update(['zaplacone' => true]);

        return view('kasa/zaplac', ['nr' => $request->get("id")]);
    }

    private function sumOrdersPrice($orders) {
        $price = 0;
        foreach ($orders as $item) {
            $price += $item->menu->sum('cena');
        }

        return $price;
    }
}
