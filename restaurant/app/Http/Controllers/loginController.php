<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uzytkownicy;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    function login(){
        //check if logged in and redirect if so
        if(Session()->get('userID'))
            switch (uzytkownicy::find(Session()->get('userID'))->pozycja_id) {
                case 1:
                    return redirect('/kelner');
                    break;
                case 2:
                    return redirect('/kuchnia');
                    break;
                case 3:
                    return redirect('/kasa');
                    break;
                case 4:
                    return redirect('/admin');
                    break;
                default:
                    return redirect('/kelner');
                    break;
            }

        //if not logged in then show log-in form
        return view('logowanie.logowanie');
    }
    
    function failedLogin(){
        $error['color'] = 'warning';
        $error['message'] = 'You should check your login or/and password.';

        return view('logowanie.logowanie', compact('error'));
    }

    function tryLogin(request $r){
        $user = uzytkownicy::where('login', $r->login) -> first();
        
        //user not found ..
        if(!$user)
            return self::failedLogin();
        //check pass
        if(Hash::check($r->haslo, $user->haslo)){
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
