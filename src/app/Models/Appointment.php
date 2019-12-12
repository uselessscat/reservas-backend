<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    protected $table = 'appointments';

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'person_id',
        'service_id',
        'branch_office_id',
        'from',
        'to',
    ];
    public function appointmentRequeriment()
    {
        return $this->hasMany('App\Models\AppointmentRequeriment');
    }
}
