<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamQuestionAnswerGroup
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamQuestionAnswerGroup
{
    use Resource;

    const RESOURCE_KEY = 'exam-question-answer-group';

    /**
     * ExamQuestionAnswerGroup constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}

