<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlaceType extends Model
{
    use SoftDeletes;

    protected $table = 'place_types';

    protected $fillable = [
        'name',
    ];
}
