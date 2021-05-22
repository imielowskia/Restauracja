<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uzytkownicy extends Model
{
    protected $table= 'uzytkownicy';
    use HasFactory;
    public function stoliki()
    {
        return $this->belongsToMany('App\Models\stoliki','uzytkownicy_stolik','uzytkownik_id','stolik_id');
    }
    public function pozycja()
    {
        return $this->belongsTo('App\Models\pozycje');
    }
}
