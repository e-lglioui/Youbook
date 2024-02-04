<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'auteur', 'disponible', 'image', 'resume'];
    use HasFactory;
    public function reservation()
{
    return $this->hasMany(Reservation::class);
}
}
