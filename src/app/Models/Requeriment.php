<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requeriment extends Model
{
    protected $table = 'requeriments';

    protected $fillable = [
        'service_id',
        'requeriment_type',
        'requeriment_type_id',
        'count',
    ];

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}
