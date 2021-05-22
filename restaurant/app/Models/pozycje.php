<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pozycje extends Model
{
    protected $table= 'pozycje';
    use HasFactory;
    public function uzytkownik()
    {
        return $this->hasMany('App\Models\uzytkownicy','pozycja_id');
    }
}
