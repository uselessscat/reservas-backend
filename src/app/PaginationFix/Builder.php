<?php

namespace App\PaginationFix;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Pagination\Paginator;

class Builder extends EloquentBuilder
{
    public function paginate($perPage = null, $columns = ['*'], $pageName = 'page', $page = null)
    {
        $page = $page ?: Paginator::resolveCurrentPage($pageName);

        $perPage = $perPage ?: $this->model->getPerPage();

        $results = ($total = $this->toBase()->getCountForPagination()) ? $this->skip($page * $perPage)->take($perPage)->get($columns) : $this->model->newCollection();

        return $this->paginator($results, $total, $perPage, $page, [
            'path' => Paginator::resolveCurrentPath(),
            'pageName' => $pageName,
        ]);
    }
}
