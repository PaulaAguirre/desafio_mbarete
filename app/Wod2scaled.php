<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wod2scaled extends Model
{
    protected $table = 'scaled2resultados';
    protected $primaryKey = 'id';

    protected $fillable = [
        'equipo_id','reps'
    ];

    public function equipo ()
    {
        return $this->belongsTo ('App\Equipo');
    }
}
