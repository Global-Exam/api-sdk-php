<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamQuestionAnswer
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamQuestionAnswer
{
    use Resource;

    const RESOURCE_KEY = 'exam-question-answer';

    /**
     * ExamQuestionAnswer constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}

