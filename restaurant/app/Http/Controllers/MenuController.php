<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\kategorie;

class menuController extends Controller
{
    function index(){
        $menu = Menu::all();
        $categories = kategorie::all();

        return view('admin.menu.main', compact('menu', 'categories'));
    }

    function new(){
        $categories = kategorie::all();

        return view('admin.menu.new', compact('categories'));
    }

    function add(request $r){
        $r -> validate([
            'nazwa' => 'required',
            'opis' => 'required|min:15',
            'kategoria_id' => 'required',
            'cena' => 'required'
        ]);

        menu::create($r->all());

        return redirect('/admin/menu');
    }

    function edit($id){
        $menu = menu::findOrFail($id);
        $categories = kategorie::all();

        return view('admin.menu.edit', compact('menu', 'categories'));
    }

    function update(request $r){
        $r -> validate([
            'nazwa' => 'required',
            'opis' => 'required|min:15',
            'kategoria_id' => 'required',
            'cena' => 'required'
        ]);

        $temp = menu::findOrFail($r->input('id'));

        $temp -> nazwa = $r->input('nazwa');
        $temp -> opis = $r->input('opis');
        $temp -> kategoria_id = $r->input('kategoria_id');
        $temp -> cena = $r->input('cena');

        $temp -> save();

        return redirect('/admin/menu');
    }

    function delete($id){
        $temp = menu::findOrFail($id);
        $temp -> delete();

        return redirect('/admin/menu');
    }

    // Categories

    function newCategory(){
        return view('admin.menu.categories.new');
    }

    function addCategory(request $r){
        $r->validate([
            'nazwa' => 'required|min:3'
        ]);

        kategorie::create($r->all());

        return redirect('/admin/menu');
    }

    function editCategory($id){
        $category = kategorie::findOrFail($id);

        return view('admin.menu.categories.edit', compact('category'));
    }

    function updateCategory(request $r){
        $r->validate([
            'nazwa' => 'required|min:3'
        ]);

        $temp = kategorie::findOrFail($r->input('id'));

        $temp -> nazwa = $r -> nazwa;
        $temp -> save();

        return redirect('/admin/menu');
    }

    function deleteCategory($id){
        kategorie::findOrFail($id) -> delete();

        return redirect('/admin/menu');
    }

    function wyswietl($id){
       $dania=kategorie::find($id);

        return view('kelner_views/kelner_dania',['dania'=>$dania]);
    }

    function wyswietl_dostepnosc($id){
        $dania=kategorie::find($id);

        return view('kuchnia/dania_dostepnosc',['dania'=>$dania]);
    }

    function dodaj_dostepnosc($id)
    {
        $danie=Menu::find($id);
        $danie->dostepnosc=1;
        $danie->save();
        $kategoria=$danie->kategoria_id;

        return redirect()->route('dania_dostepnosc',['id'=>$kategoria]);
    }
    function usun_dostepnosc($id)
    {
        $danie=Menu::find($id);
        $danie->dostepnosc=false;
        $danie->save();
        $kategoria=$danie->kategoria_id;

        return redirect()->route('dania_dostepnosc',['id'=>$kategoria]);
    }
}
