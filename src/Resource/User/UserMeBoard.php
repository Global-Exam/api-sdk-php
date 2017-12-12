<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserMeBoard
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeBoard
{
    use Resource;

    const RESOURCE_KEY = 'user/me/board';

    /**
     * UserMeBoard constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
