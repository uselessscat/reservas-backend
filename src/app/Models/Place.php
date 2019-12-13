<?php

namespace App\Models;

use App\Models\Model;
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
