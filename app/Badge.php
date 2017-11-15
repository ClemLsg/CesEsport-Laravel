<?php

namespace CesEsport;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    public function users()
    {
        return $this->belongsToMany('CesEsport\User')->as('user');
    }
}
