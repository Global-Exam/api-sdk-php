<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Coupon\Coupon;
use GlobalExam\Api\Sdk\Resource\Coupon\CouponType;

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

    /**
     * @return CouponType
     */
    public function couponType()
    {
        return new CouponType($this);
    }
}
