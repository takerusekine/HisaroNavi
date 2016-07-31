<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function menu()
    {
        return $this->hasMany('App\Menu');
    }

    public function prepaid()
    {
        return $this->hasMany('App\Prepaid');
    }

    public function option()
    {
        return $this->hasMany('App\Option');
    }

    public function region()
    {
        return $this->belongsTo('App\Region');
    }
}
