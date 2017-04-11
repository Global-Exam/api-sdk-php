<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserLicenseStatus
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserLicenseStatus
{
    use Resource;

    const RESOURCE_KEY = 'user-license-status';

    /**
     * UserLicenseStatus constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
