<?php
namespace Modules\Coupon\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Coupon\Models\Offer as Post; 

use Modules\Xot\Models\Policies\XotBasePolicy;

class OfferPolicy extends XotBasePolicy {
}
