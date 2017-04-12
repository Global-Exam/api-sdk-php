<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserPaymentStatus
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserPaymentStatus
{
    use Resource;

    const RESOURCE_KEY = 'user-payment-status';

    /**
     * UserPaymentStatus constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
