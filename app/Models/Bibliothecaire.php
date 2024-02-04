<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bibliothecaire extends Model
{
    protected $fillable = ['nom', 'prenom', 'email'];

    public function livres()
    {
        return $this->hasMany(Livre::class, 'bibliothecaire_id');
    }

}
