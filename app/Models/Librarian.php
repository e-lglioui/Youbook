<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Librarian extends Model
{
    protected $fillable = ['nom', 'prenom', 'email','password'];

    public function livres()
    {
        return $this->hasMany(Livre::class, 'bibliothecaire_id');
    }

}
