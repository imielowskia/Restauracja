<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\EditMenu;

class EditMenuController extends Controller
{
    function index(){
        $menu = EditMenu::all();

        return view('admin.showAll', compact('menu'));
    }

    function new(){
        return view('admin.new');
    }

    function add(Request $r){
        $r->validate([
            'nazwa' => 'required',
            'opis' => 'required|min:15',
            'kategoria' => 'required',
            'cena' => 'required',
        ]);

        EditMenu::create($r->all());

        return redirect('/admin/menu');
    }

    function edit($id){
        $menuElement = EditMenu::findOrFail($id);

        return view('admin.edit', compact('menuElement'));
    }

    function update(Request $r){
        $r->validate([
            'nazwa' => 'required',
            'opis' => 'required|min:15',
            'kategoria' => 'required',
            'cena' => 'required',
        ]);

            // dd($r->all());

        $menuElement = EditMenu::findOrFail($r->all()->id);
        $menuElement->nazwa = $r->all()->nazwa;
        $menuElement->save();

        return redirect('/admin/menu');
    }

}