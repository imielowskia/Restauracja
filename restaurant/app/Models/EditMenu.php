<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditMenu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $fillable = ['id', 'nazwa', 'opis', 'kategoria', 'cena'];
}
