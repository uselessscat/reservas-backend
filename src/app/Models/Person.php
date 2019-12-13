<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;

    protected $table = 'persons';

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'name',
        'last_name',
        'email',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'person_roles');
    }

    public function contacts()
    {
        return $this->morphMany('App\Models\Contact', 'contactable');
    }
}
