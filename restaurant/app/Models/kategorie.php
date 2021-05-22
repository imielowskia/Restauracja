<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategorie extends Model
{
    protected $table='kategorie';
    protected $fillable = ['nazwa'];
    use HasFactory;
    public function menu()
{
    return $this->hasMany('App\Models\Menu','kategoria_id');
}
}
