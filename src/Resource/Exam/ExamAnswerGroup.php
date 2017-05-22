<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamAnswerGroup
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamAnswerGroup
{
    use Resource;

    const RESOURCE_KEY = 'exam-answer-group';

    /**
     * ExamAnswerGroup constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
