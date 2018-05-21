<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    protected $table = 'atletas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre','apellido','cedula', 'telefono', 'email', 'equipo_id'
    ];

    public function equipo ()
    {
        return $this->belongsTo ('App\Equipo');
    }
}
