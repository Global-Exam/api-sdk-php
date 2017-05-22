<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserExamQuestionMedia
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserExamQuestionMedia
{
    use Resource;

    const RESOURCE_KEY = 'user-exam-question-media';

    /**
     * UserExamQuestionMedia constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
