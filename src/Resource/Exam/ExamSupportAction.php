<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamSupportAction
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamSupportAction
{
    use Resource;

    const RESOURCE_KEY = 'exam-support-action';

    /**
     * ExamSupportAction constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
