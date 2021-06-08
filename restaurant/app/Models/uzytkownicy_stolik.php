<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uzytkownicy_stolik extends Model
{
    use HasFactory;

    protected $table = 'uzytkownicy_stolik';
    protected $fillable = ['uzytkownik_id', 'stolik_id'];
}
