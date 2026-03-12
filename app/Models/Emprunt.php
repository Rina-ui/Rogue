<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    public function livre()
    {
        return $this->belongsTo(Livre::class);
    }

    public function emprunteur()
    {
        return $this->belongsTo(Emprunteur::class);
    }
}
