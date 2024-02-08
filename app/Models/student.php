<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nom', 'prenom', 'email','password'];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}

