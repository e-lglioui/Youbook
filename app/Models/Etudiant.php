<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = ['nom', 'prenom', 'email'];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}

