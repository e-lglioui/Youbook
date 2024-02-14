<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
 use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Librarian  extends Model implements Authenticatable
{
   use AuthenticatableTrait;
    protected $fillable = ['nom', 'prenom', 'email','password'];

    public function livres()
    {
        return $this->hasMany(Livre::class, 'bibliothecaire_id');
    }

}
