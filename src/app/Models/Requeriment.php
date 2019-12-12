<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Requeriment extends Model
{
    use SoftDeletes;

    public const REQUERIMENT_TYPES = [
        'equipment' => 'App\\Models\\EquipmentType',
        'place' => 'App\\Models\\PlaceType',
        'role' => 'App\\Models\\Role',
    ];

    protected $table = 'requeriments';

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'service_id',
        'requerimentable_type',
        'requerimentable_id',
        'count',
    ];

    protected $appends = ['requerimentable'];

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
    public function appointmentRequeriment()
    {
        return $this->hasMany('App\Models\AppointmentRequeriment');
    }
    public function getRequerimentableAttribute()
    {
        $type = $this->requeriment_type;

        $model = self::REQUERIMENT_TYPES[$type];

        return $model::findOrFail($this->requeriment_id);
    }
}
