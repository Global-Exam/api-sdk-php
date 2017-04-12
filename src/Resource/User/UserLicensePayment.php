<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserLicensePayment
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserLicensePayment
{
    use Resource;

    const RESOURCE_KEY = 'user-license-payment';

    /**
     * UserLicensePayment constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
