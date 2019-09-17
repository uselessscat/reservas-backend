<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Requeriment extends Model
{
    use SoftDeletes;

    public const REQUERIMENT_TYPES = [
        'equipment' => 'EQUIPMENT',
        'place' => 'PLACE',
        'role' => 'ROLE',
    ];

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
