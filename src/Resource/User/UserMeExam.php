<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserMeExam
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeExam
{
    use Resource;

    const RESOURCE_KEY = 'user/me/relationships/exam';

    /**
     * UserMeExam constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
