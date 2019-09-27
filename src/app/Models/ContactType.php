<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactType extends Model
{
    use SoftDeletes;

    protected $table = 'contact_types';

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'name',
    ];

    public function contacts()
    {
        return $this->hasMany('App\Models\Contact');
    }
}
