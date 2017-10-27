<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'plataform_id','status',
    ];


    /**
    * An athlete has one client family
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function plataform()
	{
    return $this->belongsTo('App\Plataform', 'plataform_id')->withDefault();
	}
}
