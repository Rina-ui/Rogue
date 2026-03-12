<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function emprunt()
    {
        return $this->hasMany(Emprunt::class);
    }
}
