<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brewery extends Model
{
    public function geocode()
    {
        return $this->hasOne(\App\Geo::class);
    }

    public function beers()
    {
        return $this->hasMany(\App\Beer::class);
    }
}
