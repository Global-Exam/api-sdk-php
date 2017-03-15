<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamQuestionPoint
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamQuestionPoint
{
    use Resource;

    const RESOURCE_KEY = 'exam-question-point';

    /**
     * ExamQuestionPoint constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
