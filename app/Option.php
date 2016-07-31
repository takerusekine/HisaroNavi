<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public function salon()
    {
        return $this->belongsTo('App\Salon');
    }
}
