<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    protected $table = 'boxes';
    protected $primaryKey = 'id';

    protected $fillable = [
      'nombre', 'telefono', 'email'
    ];

    public function equipos()
    {
        return $this->hasMany ('App\Equipo');
    }
}
