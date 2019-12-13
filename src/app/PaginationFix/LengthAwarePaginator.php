<?php

namespace App\PaginationFix;

use Illuminate\Pagination\LengthAwarePaginator as IlluminateLengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class LengthAwarePaginator extends IlluminateLengthAwarePaginator
{
    public function __construct($items, $total, $perPage, $currentPage = null, array $options = [])
    {
        parent::__construct($items, $total, $perPage, $currentPage, $options);

        $this->lastPage = max((int) floor($total / $perPage), 0);
    }

    protected function setCurrentPage($currentPage, $pageName)
    {
        $currentPage = $currentPage ?: static::resolveCurrentPage($pageName);

        return $this->isValidPageNumber($currentPage) ? (int) $currentPage : 0;
    }

    protected function isValidPageNumber($page)
    {
        return $page >= 0 && filter_var($page, FILTER_VALIDATE_INT) !== false;
    }

    public function previousPageUrl()
    {
        if ($this->currentPage() > 0) {
            return $this->url($this->currentPage() - 1);
        }
    }

    public function url($page)
    {
        if ($page < 0) {
            $page = 0;
        }

        $parameters = [$this->pageName => $page];

        if (count($this->query) > 0) {
            $parameters = array_merge($this->query, $parameters);
        }

        return $this->path()
        . (Str::contains($this->path(), '?') ? '&' : '?')
        . Arr::query($parameters)
        . $this->buildFragment();
    }

    public function firstItem()
    {
        return count($this->items) > 0 ? ($this->currentPage) * $this->perPage + 1 : null;
    }

    public function lastItem()
    {
        return count($this->items) > 0 ? $this->firstItem() + $this->count() - 1 : null;
    }

    public function hasPages()
    {
        return $this->currentPage() != 0 || $this->hasMorePages();
    }

    public function onFirstPage()
    {
        return $this->currentPage() <= 0;
    }

    public static function resolveCurrentPage($pageName = 'page', $default = 0)
    {
        if (isset(static::$currentPageResolver)) {
            return call_user_func(static::$currentPageResolver, $pageName);
        }

        return $default;
    }

    public function toArray()
    {
        return [
            'current_page' => $this->currentPage(),
            'data' => $this->items->toArray(),
            'from' => $this->firstItem(),
            'last_page' => $this->lastPage(),
            'per_page' => $this->perPage(),
            'to' => $this->lastItem(),
            'total' => $this->total(),
        ];
    }
}
