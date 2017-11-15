<?php

namespace CesEsport;

use Illuminate\Database\Eloquent\Model;

class Plateforme extends Model
{
    protected $fillable = ['name'];

    public function plateforme()
    {
        return $this->belongsToMany('CesEsport\User')->as('plateforme');
    }
}
