<?php

namespace CesEsport;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function users()
    {
        return $this->belongsToMany('CesEsport\User', 'appartient')->as('joueurs');
    }

    public function events()
    {
        return $this->belongsToMany('CesEsport\Event', 'participe')->as('event');
    }
}
