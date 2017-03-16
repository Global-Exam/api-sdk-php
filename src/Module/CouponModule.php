<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Coupon\Coupon;

/**
 * Class CouponModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait CouponModule
{
    /**
     * @return Coupon
     */
    public function coupon()
    {
        return new Coupon($this);
    }
}
