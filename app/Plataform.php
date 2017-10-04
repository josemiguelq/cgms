<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plataform extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lat', 'long','vacancy',
    ];

}
