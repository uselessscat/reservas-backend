<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use SoftDeletes;

    protected $table = 'places';

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'name',
        'branch_office_id',
    ];

    public function placeTypes()
    {
        return $this->belongsToMany('App\\Models\\PlaceType');
    }
}
