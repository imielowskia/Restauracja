<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pozycja extends Model
{
    protected $table = 'pozycje';
    protected $fillable = ['nazwa'];
    use HasFactory;
}
