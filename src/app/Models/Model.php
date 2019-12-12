<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use App\PaginationFix\Builder;

class Model extends EloquentModel
{
    public function newEloquentBuilder($query)
    {
        return new Builder($query);
    }
}
