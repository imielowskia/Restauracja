<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class menuController extends Controller
{
    function index(){
        $menu = Menu::all();

        return view('admin.menu.main', compact('menu'));
    }

    function new(){
        return view('admin.menu.new');
    }

    function add(request $r){
        $r -> validate([
            'nazwa' => 'required',
            'opis' => 'required|min:15',
            'kategoria' => 'required',
            'cena' => 'required'
        ]);

        menu::create($r->all());

        return redirect('/admin/menu');
    }

    function edit($id){
        $menu = menu::findOrFail($id);

        return view('admin.menu.edit', compact('menu'));
    }

    function update(request $r){
        $r -> validate([
            'nazwa' => 'required',
            'opis' => 'required|min:15',
            'kategoria' => 'required',
            'cena' => 'required'
        ]);

        $temp = menu::findOrFail($r->input('id'));

        $temp -> nazwa = $r->input('nazwa');
        $temp -> opis = $r->input('opis');
        $temp -> kategoria = $r->input('kategoria');
        $temp -> cena = $r->input('cena');

        $temp -> save();

        return redirect('/admin/menu');
    }
    
    function delete($id){
        $temp = menu::findOrFail($id);
        $temp -> delete();
        
        return redirect('/admin/menu');
    }
}
