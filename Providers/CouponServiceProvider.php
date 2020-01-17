<?php

namespace Modules\Coupon\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
//---bases ---
use Modules\Xot\Providers\XotBaseServiceProvider;

class CouponServiceProvider extends XotBaseServiceProvider
{
      protected $module_dir = __DIR__;
    protected $module_ns = __NAMESPACE__;
    public $module_name = 'coupon'; //lower del nome

    
}
