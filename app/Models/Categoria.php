<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function preguntas() {
        return $this->hasMany(Pregunta::class);
    }
}
