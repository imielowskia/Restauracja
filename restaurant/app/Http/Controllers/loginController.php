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
        $adminCount = uzytkownicy::where('pozycja_id', 4) -> get() -> count();

        if(uzytkownicy::find($user) == null)
            Session()->forget('userID');

        if(uzytkownicy::find($user)){
            $role = uzytkownicy::find($user)->pozycja_id;

            if($role == 1)
                return redirect('kelner-zamowienia');
            elseif($role == 2)
                return redirect('kasa');
            elseif($role == 3)
                return redirect('kuchnia');
            elseif($role == 4)
                return redirect('admin');
        }
        else if($adminCount == 0){
            return redirect(url('admin'));
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
