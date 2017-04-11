<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserPlan
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserPlan
{
    use Resource;

    const RESOURCE_KEY = 'user-plan';

    /**
     * UserPlan constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
