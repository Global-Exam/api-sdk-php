<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserMeBoardTraining
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeBoardTraining
{
    use Resource;

    const RESOURCE_KEY = 'user/me/board-training';

    /**
     * UserMeBoardTraining constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
