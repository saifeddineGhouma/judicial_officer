<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $fillable = [
        'name', 'adress', 'tel', 'domaine'
    ];

    public function dossiers()
    {
        return $this->hasMany('App\Dossier');
 
    }
}
