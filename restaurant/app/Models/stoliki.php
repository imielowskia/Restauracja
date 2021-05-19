<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stoliki extends Model
{
    protected $table= 'stoliki';
    use HasFactory;
    public function kelner()
    {
        return $this->belongsToMany('App\Models\uzytkownicy','uzytkownicy_stolik','stolik_id','uzytkownik_id');
    }
    public function Zamowienia()
    {
        return $this->hasMany('App\Models\Zamowienie','stolik_id');
    }
}
