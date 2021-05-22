<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uzytkownicy;

class UserController extends Controller
{
    function index()
    {
        $user = uzytkownicy::all();

        return view('admin.user.main', compact('user'));
    }

    function new()
    {
        return view('admin.user.new');
    }

    function add(request $r)
    {
        $r->validate([
            'logowanie' => 'required',
            'haslo' => 'required',
            'imie' => 'required',
            'nazwisko' => 'required',
            'stanowisko' => 'required'
        ]);

        uzytkownicy::create($r->all());

        return redirect('/admin/users');
    }

    function edit($id)
    {
        $user = uzytkownicy::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }

    function update(request $r)
    {
        $r->validate([
            'logowanie' => 'required',
            'haslo' => 'required',
            'imie' => 'required',
            'nazwisko' => 'required',
            'stanowisko' => 'required'
        ]);

        $temp = uzytkownicy::findOrFail($r->input('id'));

        $temp->logowanie = $r->input('logowanie');
        $temp->haslo = $r->input('haslo');
        $temp->imie = $r->input('imie');
        $temp->nazwisko = $r->input('nazwisko');
        $temp->stanowisko = $r->input('stanowisko');

        $temp->save();

        return redirect('/admin/users');
    }

    function delete($id)
    {
        uzytkownicy::findOrFail($id)->delete();

        return redirect('/admin/users');
    }
}
