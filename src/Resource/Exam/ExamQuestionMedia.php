<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamQuestionMedia
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamQuestionMedia
{
    use Resource;

    const RESOURCE_KEY = 'exam-question-media';

    /**
     * ExamQuestionMedia constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
