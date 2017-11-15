<?php

namespace CesEsport;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    public function rank()
    {
        return $this->hasMany('CesEsport\User');
    }
}
