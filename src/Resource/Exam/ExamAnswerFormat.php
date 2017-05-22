<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamAnswerFormat
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamAnswerFormat
{
    use Resource;

    const RESOURCE_KEY = 'exam-answer-format';

    /**
     * ExamAnswerFormat constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
