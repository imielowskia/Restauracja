<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zamowienie extends Model
{
    protected $table= 'zamowienia';
    protected $fillable = ['zaplacone'];


    public function menu()
    {
        return $this->belongsToMany('App\Models\Menu','zamowienia_menu','zamowienie_id','menu_id');
    }
    public function stolik()
    {
        return $this->belongsTo('App\Models\stoliki');
    }
    public function status()
    {
        return $this->belongsTo('App\Models\statusy');
    }
    public function uzytkownik()
    {
        return $this->belongsTo('App\Models\uzytkownicy');
    }
}
