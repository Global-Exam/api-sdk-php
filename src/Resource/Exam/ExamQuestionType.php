<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamQuestionType
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamQuestionType
{
    use Resource;

    const RESOURCE_KEY = 'exam-question-type';

    /**
     * ExamQuestionType constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
