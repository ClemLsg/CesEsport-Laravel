<?php

namespace CesEsport;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','bio','cesi_team_id','cesmember'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function teams()
    {
        return $this->belongsToMany('CesEsport\Team', 'appartient')->as('equipes');
    }

    public function badges()
    {
        return $this->belongsToMany('CesEsport\Badge')->as('badges');
    }

    public function solos()
    {
        return $this->belongsToMany('CesEsport\Event', 'solo')->as('soloing')->withPivot('game_id');
    }

    public function jeux()
    {
        return $this->belongsToMany('CesEsport\Game')->as('games');
    }

    public function cesiteam()
    {
        return $this->belongsTo('CesEsport\CesiTeam', 'cesi_team_id');
    }

    public function plateforme()
    {
        return $this->belongsToMany('CesEsport\Plateforme')->as('plateforme');
    }

    public function rank()
    {
        return $this->belongsTo('CesEsport\Rank', 'rank_id');
    }
}
