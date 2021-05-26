<?php

namespace App\Http\Controllers;

use App\Models\stoliki;
use App\Models\uzytkownicy;
use Illuminate\Http\Request;
use App\Models\Zamowienie;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
class ZamowieniaController extends Controller
{
    public function index()
    {
        $Zamowienia=Zamowienie::all();

        return view('kuchnia',['Zamowienia'=>$Zamowienia]);
    }

    public function realizacja()
    {
        if(isset($_GET['multiple'])) {
            $a = $_GET['multiple'];
            $zamowienie = Zamowienie::find($a);
            $zamowienie->status = 'w realizacji';
            $zamowienie->save();
        }
        return redirect()->route('kuchnia');
    }

    public function wydaj()
    {
        if(isset($_GET['multiple'])) {
            $a = $_GET['multiple'];
            $zamowienie = Zamowienie::find($a);
            $zamowienie->status = 'wydano z kuchni';
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
        $Zamowienia=Zamowienie::all();
        $zamowienie=Zamowienie::find($id);
        $zamowienie->status='wydano';
        $zamowienie->save();
    }
}
