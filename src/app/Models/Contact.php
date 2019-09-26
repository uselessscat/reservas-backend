<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    protected $table = 'contacts';

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'data',
        'contact_type_id',
    ];

    public function contactable()
    {
        return $this->morphTo();
    }

    public function contact_type()
    {
        return $this->belongsTo('App\Models\ContactType');
    }
}
