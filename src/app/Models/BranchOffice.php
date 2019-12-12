<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BranchOffice extends Model
{
    use SoftDeletes;

    protected $table = 'branch_offices';

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'name',
    ];

    public function contacts()
    {
        return $this->morphMany('App\Models\Contact', 'contactable');
    }
}
