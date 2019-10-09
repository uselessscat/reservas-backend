<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlaceType extends Model
{
    use SoftDeletes;

    protected $table = 'place_types';

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'name',
    ];

    public function places()
    {
        return $this->belongsToMany('App\\Models\\Place');
    }
}
