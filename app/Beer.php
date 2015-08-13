<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    public function brewery()
    {
        return $this->belongsTo(\App\Brewery::class);
    }
}
