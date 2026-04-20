<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    public function desafiaments() {
        return $this->belongsToMany(Desafiament::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}
