<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function salon()
    {
        return $this->hasMany('App\Salon');
    }
}
