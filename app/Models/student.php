<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Student extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    
    protected $fillable = ['nom', 'prenom', 'email','password'];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}

