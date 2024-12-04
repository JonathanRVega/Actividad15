<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personajes extends Model
{
    public function personajes()
    {
        return $this->belongsTo(Pelicula::class, 'pelicula_nombre', 'Nombre');
    }
}
