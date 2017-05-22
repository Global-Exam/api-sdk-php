<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamAnswerChoice
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamAnswerChoice
{
    use Resource;

    const RESOURCE_KEY = 'exam-answer-choice';

    /**
     * ExamAnswerChoice constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
