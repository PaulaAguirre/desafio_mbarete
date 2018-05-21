<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wod1scaled extends Model
{
    protected $table = 'scaled1resultados';
    protected $primaryKey = 'id';

    protected $fillable = [
        'equipo_id','tiempo'
    ];

    public function equipo ()
    {
        return $this->belongsTo ('App\Equipo');
    }
}
