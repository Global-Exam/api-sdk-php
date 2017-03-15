<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamQuestion
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamQuestion
{
    use Resource;

    const RESOURCE_KEY = 'exam-question';

    /**
     * ExamQuestion constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
