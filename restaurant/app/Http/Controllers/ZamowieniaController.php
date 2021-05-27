<?php

namespace App\Http\Controllers;

use App\Models\stoliki;
use App\Models\uzytkownicy;
use Illuminate\Http\Request;
use App\Models\Zamowienie;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
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
            $zamowienie->status = 'Do wydania';
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
        $zamowienie->status='Wydano';
        $zamowienie->save();
        return redirect()->route('kelner-zamowienia');
    }
    public function zamowienia_dzis()
    {   $zamowienia=\App\Models\Zamowienie::whereDate('created_at', '=', Carbon::today()->toDateString())
        ->wherein('status', ['Do wydania', 'Wydano' ,'Zakonczone'])->get();;
        return view('kuchnia/zestawienie',['zamowienia'=>$zamowienia]);
    }
    public function zamowienia_dzis_kelner()
    {   if(isset($_GET['id']))
    {
        $id=$_GET['id'];

    if($id=="wszystkie")
    {
        $zamowienia=\App\Models\Zamowienie::whereDate('created_at', '=', Carbon::today()->toDateString())
            ->wherein('status', ['Do wydania', 'Wydano' ,'Zakonczone'])->get();;
        return view('kuchnia/zestawienie',['zamowienia'=>$zamowienia]);
    }
    else {
        $kelner = uzytkownicy::find($id);
        $zamowienia = \App\Models\Zamowienie::whereDate('created_at', '=', Carbon::today()->toDateString())
            ->where('uzytkownik_id', $id)
            ->wherein('status', ['Do wydania', 'Wydano' ,'Zakonczone'])->get();;
        return view('kuchnia/zestawienie_kelner', ['zamowienia' => $zamowienia, 'kelner' => $kelner]);
    }
    }
    else  {
        $zamowienia=\App\Models\Zamowienie::whereDate('created_at', '=', Carbon::today()->toDateString())
            ->wherein('status', ['Do wydania', 'Wydano' ,'Zakonczone'])->get();;
        return view('kuchnia/zestawienie',['zamowienia'=>$zamowienia]);
    }
}

}
