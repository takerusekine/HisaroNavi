<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function salons()
    {
        return $this->hasMany('App\Salon');
    }
}
