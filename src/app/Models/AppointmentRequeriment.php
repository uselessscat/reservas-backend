<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppointmentRequeriment extends Model
{
    use SoftDeletes;

    protected $table = 'appointment_requeriments';

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'appointment_id',
        'requeriment_id',
    ];
    public function requeriment()
    {
        return $this->belongTo('App\Models\Requeriment');
    }
    public function appointment()
    {
        return $this->belongTo('App\Models\Appointment');
    }
}
