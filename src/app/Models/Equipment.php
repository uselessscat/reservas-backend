<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{
    use SoftDeletes;

    protected $table = 'equipments';

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'name',
        'branch_office_id',
    ];

    public function equipmentTypes()
    {
        return $this->belongsToMany('App\\Models\\EquipmentType');
    }
}
