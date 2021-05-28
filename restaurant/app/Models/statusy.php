<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statusy extends Model
{
    protected $table= 'statusy';
    use HasFactory;

    public function Zamowienia()
    {
        return $this->hasMany('App\Models\Zamowienie','stolik_id');
    }
}
