<?php

namespace Modules\Coupon\Models;

use Carbon\Carbon;
//----- traits ----
use Modules\Blog\Models\Traits\RatingTrait;

//------services---------

//--- models ---

class Offer extends BaseModel {
    protected $fillable=['post_id','product_post_id','base_price','date_start','date_end','discount_value','discount_unit','price','coupon_code','units_in_stock','note','created_at','created_by','updated_at','updated_by'];

}
