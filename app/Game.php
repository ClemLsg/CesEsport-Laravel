<?php

namespace CesEsport;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    protected $fillable = ['name'];
    public $timestamps = false;

    public function games()
    {
        return $this->belongsToMany('CesEsport\Event', 'joue')->as('event');
    }

    public function jeux()
    {
        return $this->belongsToMany('CesEsport\User')->as('event');
    }

    public function cesiteam()
    {
        return $this->belongsToMany('CesEsport\CesiTeam')->as('cesiteam');
    }
}
