<?php

namespace GlobalExam\Api\Sdk\Resource\Coupon;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class Coupon
 *
 * @package GlobalExam\Api\Sdk\Resource\Coupon
 */
class Coupon
{
    use Resource;

    const RESOURCE_KEY = 'coupon';

    /**
     * Coupon constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
