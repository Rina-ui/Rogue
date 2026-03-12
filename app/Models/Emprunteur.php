<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprunteur extends Model
{
    public function emprunt()
    {
        return $this->hasMany(Emprunt::class);
    }
}
