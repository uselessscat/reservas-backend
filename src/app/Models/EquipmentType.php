<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EquipmentType extends Model
{
    use SoftDeletes;

    protected $table = 'equipment_types';

    protected $fillable = [
        'name',
    ];
}
