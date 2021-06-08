<?php

namespace App\Http\Controllers;

use App\Models\stoliki;
use App\Models\uzytkownicy;
use Illuminate\Http\Request;
use App\Models\Zamowienie;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use mysql_xdevapi\Session;
class ZamowieniaController extends Controller
{
    public function index()
    {
        if (Session()->get('userID')) {
            $user = (isset(uzytkownicy::find(Session()->get('userID'))->login))? uzytkownicy::find(Session()->get('userID'))->pozycja->id : '';
            if ($user == 3) {
                $Zamowienia = Zamowienie::all();
                return view('kuchnia', ['Zamowienia' => $Zamowienia]);
            } else {
                return view('logowanie.logowanie');
            }
        }
        else return view('logowanie.logowanie');
    }


    public function realizacja()
    {
        if(isset($_GET['multiple'])) {
            $a = $_GET['multiple'];
            $zamowienie = Zamowienie::find($a);
            $zamowienie->status_id = 2;
            $zamowienie->save();
        }
        return redirect()->route('kuchnia');
    }

    public function wydaj()
    {
        if(isset($_GET['multiple'])) {
            $a = $_GET['multiple'];
            $zamowienie = Zamowienie::find($a);
            $zamowienie->status_id = 3;
            $zamowienie->save();
        }
        return redirect()->route('kuchnia');

    }

    public function index2()
    {
        $Zamowienia=Zamowienie::all();

        return view('kelner-zamowienia',['Zamowienia'=>$Zamowienia]);
    }

    public function zmianaStatusu($id)
    {
        $zamowienie=Zamowienie::find($id);
        $zamowienie->status_id=4;
        $zamowienie->save();
        return redirect()->route('kelner-zamowienia');
    }
    public function zamowienia_dzis()
    {   $startdata = isset( $_GET['data']) ?  $_GET['data'] : Carbon::today()->toDateString();
        $koniecdata = isset( $_GET['datak']) ?  $_GET['datak'] : Carbon::today()->toDateString();
        $zamowienia=\App\Models\Zamowienie::whereBetween('created_at',[$startdata,$koniecdata])
        ->wherein('status_id', [3,4,5])->get();
        return view('kuchnia/zestawienie',['zamowienia'=>$zamowienia,'startdata'=>$startdata,'koniecdata'=>$koniecdata]);
    }
    public function zamowienia_dzis_kelner()
    {   $startdata = isset( $_GET['data']) ?  $_GET['data'] : Carbon::today()->toDateString();
        $koniecdata = isset( $_GET['datak']) ?  $_GET['datak'] : Carbon::today()->toDateString();
        if(isset($_GET['id']))
    {
        $id=$_GET['id'];

    if($id=="wszystkie")
    {
        $zamowienia=\App\Models\Zamowienie::whereBetween('created_at',[$startdata,$koniecdata])
            ->wherein('status_id', [3,4,5])->get();
        return view('kuchnia/zestawienie',['zamowienia'=>$zamowienia,'startdata'=>$startdata,'koniecdata'=>$koniecdata]);
    }
    else {
        $kelner = uzytkownicy::find($id);
        $zamowienia = \App\Models\Zamowienie::whereBetween('created_at',[$startdata,$koniecdata])
            ->where('uzytkownik_id', $id)
            ->wherein('status_id', [3,4,5])->get();
        return view('kuchnia/zestawienie_kelner', ['zamowienia' => $zamowienia, 'kelner' => $kelner,'startdata'=>$startdata,'koniecdata'=>$koniecdata]);
    }
    }
    else  {
        $zamowienia=\App\Models\Zamowienie::whereBetween('created_at',[$startdata,$koniecdata])
            ->wherein('status_id', [3,4,5])->get();
        return view('kuchnia/zestawienie',['zamowienia'=>$zamowienia,'startdata'=>$startdata,'koniecdata'=>$koniecdata]);
    }
}

}
