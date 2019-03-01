<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserPlanning
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserPlanning
{
    use Resource;

    const RESOURCE_KEY = 'user-planning';

    /**
     * UserPlanning constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
