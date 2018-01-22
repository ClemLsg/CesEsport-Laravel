<?php

namespace CesEsport;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    protected $fillable = [
        'name',
        'desc',
        'logo',
    ];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany('CesEsport\User')->as('user');
    }
}
