<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre', 'telefono', 'email'
    ];

    public function box ()
    {
        return $this->belongsTo ('App\Box');
    }
     public function atletas ()
     {
         return $this->hasMany ('App\Atleta');
     }
}
