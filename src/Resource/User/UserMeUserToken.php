<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserMeUserToken
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeUserToken
{
    use Resource;

    const RESOURCE_KEY = 'user/me/user-token';

    /**
     * UserMeUserToken constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
