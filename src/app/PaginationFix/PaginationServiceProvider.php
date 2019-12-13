<?php

namespace App\PaginationFix;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class PaginationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // set page resolver
        Paginator::currentPageResolver(function ($pageName = 'page') {
            $page = $this->app['request']->input($pageName);

            if (filter_var($page, FILTER_VALIDATE_INT) !== false && (int) $page >= 0) {
                return (int) $page;
            }

            return 0;
        });
    }

    public function register()
    {

    }
}
