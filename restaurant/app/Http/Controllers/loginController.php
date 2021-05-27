<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uzytkownicy;
use App\Models\pozycja;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    function login(){
        $user = Session()->get('userID');
        // return $user;
        if($user){
            $role = uzytkownicy::find($user)->pozycja_id;
            $role = pozycja::find($role)->nazwa;
            $role = strtolower($role);

            if($role == 'kelner')
                return redirect('kelner-zamowienia');
            elseif($role == 'kasjer')
                return redirect('kasa');
            elseif($role == 'kucharz')
                return redirect('kuchnia');
            elseif($role == 'kierownik')
                return redirect('admin');
        }
        else
            return view('logowanie.logowanie');
    }

    function failedLogin(){
        $error['color'] = 'warning';
        $error['message'] = 'You should check your login or/and password.';

        return view('logowanie.logowanie', compact('error'));
    }

    function tryLogin(request $r){
        $user = uzytkownicy::where('login', $r->login) -> first();
        
        if($user && Hash::check($r->haslo, $user->haslo)){
            Session()->put('userID', $user->id);
            return self::login();
        }
        else
            return self::failedLogin();
    }

    function logout(){
        Session()->forget('userID');

        $error['color'] = 'success';
        $error['message'] = 'You are logged out.';

        return view('logowanie.logowanie', compact('error'));;
    }
}
