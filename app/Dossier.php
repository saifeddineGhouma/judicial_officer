<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $fillable = [
        'ref', 'date', 'name','num','type', 'contre', 'comment','client_id'
    ];

    public function files()
    {
        return $this->hasMany('App\File');
 
    }
    public function search($id=null)
    {
        $query = $this->select('*') ;
        if(isset($id))
         $query->where('client_id',$id);
        return $query ;
    }
}
