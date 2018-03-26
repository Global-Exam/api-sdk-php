<?php

namespace GlobalExam\Api\Sdk\Resource\Coupon;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class CouponType
 *
 * @package GlobalExam\Api\Sdk\Resource\Coupon
 */
class CouponType
{
    use Resource;

    const RESOURCE_KEY = 'coupon-type';

    /**
     * CouponType constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
