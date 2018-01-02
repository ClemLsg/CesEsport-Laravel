<?php

namespace CesEsport;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $fillable = [
        'name',
        'desc',
        'ptsrewards',
        'players',
        'lieu',
        'date',
    ];

    public function teams()
    {
        return $this->belongsToMany('CesEsport\Team', 'participe')->as('equipes');
    }

    public function solos()
    {
        return $this->belongsToMany('CesEsport\User', 'solo')->as('soloing')->withPivot('game_id');
    }

    public function games()
    {
        return $this->belongsToMany('CesEsport\Game', 'joue')->as('games');
    }
}
