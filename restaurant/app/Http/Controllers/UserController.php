<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uzytkownicy;
use App\Models\pozycja;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index()
    {
        $user = uzytkownicy::all();
        $roles = pozycja::all();
        $rolesCount = pozycja::all()->count();

        return view('admin.user.main', compact('user', 'roles', 'rolesCount'));
    }

    function new()
    {
        $roles = pozycja::all();

        return view('admin.user.new', compact('roles'));
    }

    function add(request $r)
    {
        $r->validate([
            'login' => 'required|unique:uzytkownicy',
            'haslo' => 'required',
            'imie' => 'required',
            'nazwisko' => 'required',
            'pozycja_id' => 'required'
        ]);

        $temp = $r->all();
        $temp['haslo'] = Hash::make($r->haslo);

        uzytkownicy::create($temp);

        return redirect('/admin/users');
    }

    function edit($id)
    {
        $user = uzytkownicy::findOrFail($id);
        $roles = pozycja::all();

        return view('admin.user.edit', compact('user', 'roles'));
    }

    function update(request $r)
    {
        $r->validate([
            'login' => 'required',
            'imie' => 'required',
            'nazwisko' => 'required',
            'pozycja_id' => 'required'
        ]);

        $temp = uzytkownicy::findOrFail($r->input('id'));
        if($r->input('haslo') != '')
            $temp->haslo = Hash::make($r->haslo);
        $temp->login = $r->input('login');
        $temp->imie = $r->input('imie');
        $temp->nazwisko = $r->input('nazwisko');
        $temp->pozycja_id = $r->input('pozycja_id');

        $temp->save();

        return redirect('/admin/users');
    }

    function delete($id)
    {
        uzytkownicy::findOrFail($id)->delete();

        return redirect('/admin/users');
    }

    // Roles

    function newRole(){
        return view('admin.user.roles.new');
    }

    function addRole(request $r){
        $r -> validate([
            'nazwa' => 'required|min:3|unique:pozycje'
        ]);

        pozycja::create($r->all());

        return redirect('/admin/users');
    }

    function editRole($id){
        $role = pozycja::findOrFail($id);

        return view('admin.user.roles.edit', compact('role'));
    }

    function updateRole(request $r){
        $r->validate([
            'nazwa' => 'required|min:3'
        ]);

        $temp = pozycja::findOrFail($r->input('id'));
        $temp -> nazwa = $r->input('nazwa');
        $temp -> save();

        return redirect('/admin/users');
    }
    
    function deleteRole($id){

        $r = new Request([ 'id' => $id ]);
        $rules = [ 'id' => 'unique:uzytkownicy,pozycja_id' ];
        $messages = [ 'id.unique' => 'Some user has that position!' ];

        $this->validate($r, $rules, $messages);

        pozycja::findOrFail($id) -> delete();
        
        return redirect('/admin/users');
    }
}
