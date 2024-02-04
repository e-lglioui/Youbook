<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['date_reservation', 'date_retour', 'retourne'];

    public function livre()
    {
        return $this->belongsTo(Livre::class);
    }

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
