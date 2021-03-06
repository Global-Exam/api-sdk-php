<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserLicense
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserLicense
{
    use Resource;

    const RESOURCE_KEY = 'user-license';

    /**
     * UserLicense constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
