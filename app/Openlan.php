<?php

namespace CesEsport;

use Illuminate\Database\Eloquent\Model;

class Openlan extends Model
{
    //
    protected $fillable = [
        'name', 'user_id'
    ];

    public function players()
    {
        return $this->belongsToMany('CesEsport\User');
    }

    public function creator()
    {
        return $this->belongsTo('CesEsport\User' ,'user_id');
    }
}
