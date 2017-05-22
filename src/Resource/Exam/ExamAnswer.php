<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamAnswer
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamAnswer
{
    use Resource;

    const RESOURCE_KEY = 'exam-answer';

    /**
     * ExamAnswer constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
