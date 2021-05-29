<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pozycja;
use App\Models\statusy;

class autoTablesController extends Controller
{
    function init(){
        $message = "";
        
        $message = self::checkRoles($message);
        $message .= "<hr/>";
        $message = self::checkStatuses($message);
        
        return view('admin.autoTables.main', compact('message'));
    }

    function checkRoles($message){
        $countRoles = pozycja::all()->count();

        if($countRoles == 0){
            $message .= "Nieznaleziono pozycji..<br/>";
            $temp = [
                [ 'nazwa' => 'Kelner' ],
                [ 'nazwa' => 'Kasjer' ],
                [ 'nazwa' => 'Kucharz' ],
                [ 'nazwa' => 'Kierownik' ]
            ];
            
            foreach ($temp as $role){
                pozycja::create($role);
                $message .= "Utworzono pozycje <b>" . $role['nazwa'] . '</b><br/>';
            }
            $message .= "Zakończono tworzenie pozycji!";

        }
        else if($countRoles == 4){
            $temp = pozycja::all();
            $good = true;
            foreach ($temp as $tmp)
                if($tmp->id < 1 || $tmp->id > 4)
                    $good = false;
            if($good)
                $message .= "Wszystkie pozycje są na miejscu!<br/>";
            else
                $message .= "Pozycje są stworzone, lecz mają błędne ID! Zmień je manualnie!<br/>";
        }
        else
            $message .= "Niespodziewana ilość pozycji!<br/>";

        return $message;
    }

    function checkStatuses($message){
        $countStatuses = statusy::all()->count();

        if($countStatuses == 0){
            $message .= "Nieznaleziono pozycji..<br/>";
            $temp = [
                [ 'nazwa' => 'Złożone' ],
                [ 'nazwa' => 'W realizacji' ],
                [ 'nazwa' => 'Do wydania' ],
                [ 'nazwa' => 'Wydano' ],
                [ 'nazwa' => 'Zapłacono' ]
            ];
            
            foreach ($temp as $status){
                statusy::create($status);
                $message .= "Utworzono status o nazwie <b>" . $status['nazwa'] . '</b><br/>';
            }
            $message .= "Zakończono tworzenie statusów!";

        }
        else if($countStatuses == 5){
            $temp = statusy::all();
            $good = true;
            foreach ($temp as $tmp)
                if($tmp->id < 1 || $tmp->id > 5)
                    $good = false;
            if($good)
                $message .= "Wszystkie statusy są na miejscu!<br/>";
            else
                $message .= "Statusy są stworzone, lecz mają błędne ID! Zmień je manualnie!<br/>";
        }
        else
            $message .= "Niespodziewana ilość statusów!<br/>";

        return $message;
    }

    function editRoles(){
        $roles = pozycja::all();
        
        return view('admin.autoTables.editRoles', compact('roles'));
    }

    function editRole($id){
        $role = pozycja::findOrFail($id);
        
        return view('admin.autoTables.editRole', compact('role'));
    }

    function updateRoles(request $r){
        $r->validate([
            'nazwa' => 'required|min:3'
        ]);

        $temp = pozycja::findOrFail($r->input('id'));
        $temp -> nazwa = $r -> input('nazwa');
        $temp -> save();

        return self::editRoles();

    }

    //------------------------------------------STATUSES

    function editStatuses(){
        $statuses = statusy::all();

        return view('admin.autoTables.editStatuses', compact('statuses'));
    }

    function editStatus($id){
        $status = statusy::findOrFail($id);

        return view('admin.autoTables.editStatus', compact('status'));
    }

    function updateStatus(request $r){
        $r->validate([
            'nazwa' => 'required|min:3'
        ]);

        $temp = statusy::findOrFail($r->input('id'));
        $temp -> nazwa = $r -> input('nazwa');
        $temp -> save();
        
        return self::editStatuses();
    }
}