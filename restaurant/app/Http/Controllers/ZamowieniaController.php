<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zamowienie;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
class ZamowieniaController extends Controller
{
    public function index()
    {
        $Zamowienia=Zamowienie::all();
        $Menu=Menu::all();
        return view('kuchnia',['Zamowienia'=>$Zamowienia,'Menu'=>$Menu]);
    }

    public function realizacja()
    {
        $a=$_GET['multiple'];
        $zamowienie=Zamowienie::find($a);
        $zamowienie->status='w realizacji';
        $zamowienie->save();

        return redirect()->route('kuchnia');
    }

    public function wydaj()
    {
        $a=$_GET['multiple'];
        $zamowienie=Zamowienie::find($a);
        $zamowienie->status='wydano';
        $zamowienie->save();

        return redirect()->route('kuchnia');
    }


}
