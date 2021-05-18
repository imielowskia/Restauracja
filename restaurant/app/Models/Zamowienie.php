<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zamowienie extends Model
{
    protected $table= 'zamowienia';

    public function Menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }
}
