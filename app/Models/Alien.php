<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alien extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'raca', 'habilidade', 'serie'];
}
