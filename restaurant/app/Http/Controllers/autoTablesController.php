<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pozycja;
use App\Models\statusy;
use App\Models\stoliki;

class autoTablesController extends Controller
{
    function init(){
        $message = "";
        
        $message = self::checkRoles($message);
        $message .= "<hr/>";
        $message = self::checkStatuses($message);
        $message .= "<hr/>";
        $message = self::checkTables($message);
        
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
            $message .= "Nieznaleziono statusów..<br/>";
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
        $objects = pozycja::all();
        $title = 'Wszystkie role';
        $columnsHead = [ '#',  'Nazwa' ];
        $columnsBody = [ 'id',  'nazwa' ];
        $manage = [ 'edit' => true, 'delete' => false, 'add' => false ];

        return view('admin.sthToShow', compact('objects', 'title', 'columnsHead', 'columnsBody', 'manage'));
    }

    function editRole($id){
        $object = pozycja::findOrFail($id);
        $title = 'Edutuj role ' . $object->nazwa;
        $values = [ ['type' => 'text', 'value' => 'nazwa'] ];

        return view('admin.sthToEdit', compact('object', 'title', 'values'));
    }

    function updateRoles(request $r){
        $r->validate([
            'nazwa' => 'required|min:3'
        ]);

        $temp = pozycja::findOrFail($r->input('id'));
        $temp -> nazwa = $r -> input('nazwa');
        $temp -> save();
        
        return redirect(url()->current() . '/../');
    }

    //------------------------------------------STATUSES

    function editStatuses(){
        $objects = statusy::all();
        $title = 'Wszytkie statusy';
        $columnsHead = [ '#',  'Nazwa' ];
        $columnsBody = [ 'id',  'nazwa' ];
        $manage = [ 'edit' => true, 'delete' => false, 'add' => false ];

        return view('admin.sthToShow', compact('objects', 'title', 'columnsHead', 'columnsBody', 'manage'));
    }

    function editStatus($id){
        $object = statusy::findOrFail($id);
        $title = 'Edituj status ' . $object->nazwa;
        $values = [ ['type' => 'text', 'value' => 'nazwa'] ];

        return view('admin.sthToEdit', compact('object', 'title', 'values'));
    }

    function updateStatus(request $r){
        $r->validate([
            'nazwa' => 'required|min:3'
        ]);

        $temp = statusy::findOrFail($r->input('id'));
        $temp -> nazwa = $r -> input('nazwa');
        $temp -> save();
        
        return redirect(url()->current() . '/../');
    }

    // --------------------------------------------------- TABLES

    function checkTables($message){
        $count = stoliki::all()->count();
        
        if($count == 0)
            $message .= 'Nie znaleziono żadnych stolików, kliknij <a href="autoTables/generateTables">tutaj</a> aby je wygenerować!<br/>';
        else
            $message .= 'Masz ' . $count . ' stolików. Możesz jest edytować poniżej!<br/>';
        
        return $message;
    }
    
    function generateTables(){
        $count = stoliki::all()->count();
        
        return view('admin.autoTables.generateTables');
    }

    function processGenerateTables(request $r){
        $r->validate([
            'ilosc' => 'integer'
        ]);
        $quantity = $r -> input('ilosc');

        for($i = 1; $i<$quantity; $i++)
            stoliki::create(['numer' => $i]);

        return redirect(url('/admin/autoTables'));
    }

    function tablesShow(){
        $objects = stoliki::all();
        $title = 'All tables';
        $columnsHead = [ '#',  'Nazwa' ];
        $columnsBody = [ 'id',  'numer' ];
        $manage = [ 'edit' => true, 'delete' => true, 'add' => true ];

        if($objects->count() == 0)
            return redirect('admin/autoTables/generateTables');
        else
            return view('admin.sthToShow', compact('objects', 'title', 'columnsHead', 'columnsBody', 'manage'));
    }

    function editTable($id){
        $object = stoliki::findOrFail($id);
        $title = 'Edit table number ' . $object->numer;
        $values = [ ['type' => 'number', 'value' => 'numer'] ];

        return view('admin.sthToEdit', compact('object', 'title', 'values'));
    }

    function updateTable(request $r){
        $r->validate([
            'numer' => 'integer'
        ]);

        $temp = stoliki::findOrFail($r->input('id'));
        $temp -> numer = $r->input('numer');
        $temp -> save();

        return redirect(url('/admin/autoTables/tables/show'));
    }
    
    function deleteTable($id){
        stoliki::findOrFail($id)->delete();
        
        return redirect(url('/admin/autoTables/tables/show'));
    }

    function addTable(){
        $title = 'Adding new table';
        $values = [ ['type' => 'text', 'value' => 'numer'] ];

        return view('admin.sthToAdd', compact('title', 'values'));
    }

    function addNewTable(request $r){
        $r->validate([
            'numer' => 'integer|unique:stoliki'
        ]);

        stoliki::create($r->all());

        return redirect('/admin/autoTables/tables/show');
    }
}