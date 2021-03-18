<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name','population','area','weather','area_code']; //al posto di assegnare una per una nel file controller . You need to name the var necessarily fillable
}
