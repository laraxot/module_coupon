<?php

namespace Modules\Coupon\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $moduleNamespace = 'Modules\Coupon\Http\Controllers';
    protected $module_dir = __DIR__;
    protected $module_ns = __NAMESPACE__;
}
