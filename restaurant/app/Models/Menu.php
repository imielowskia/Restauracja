<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table= 'menu';
    protected $fillable = ['nazwa', 'opis', 'kategoria', 'cena'];

    public function zamowienie()
    {
        return $this->belongsToMany('App\Models\Zamowienie','zamowienia_menu','menu_id','zamowienie_id');
    }
    public function ketegoria()
    {
        return $this->belongsTo('App\Models\ketegorie');
    }
}
