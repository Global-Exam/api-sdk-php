<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamSupportType
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamSupportType
{
    use Resource;

    const RESOURCE_KEY = 'exam-support-type';

    /**
     * ExamSupportType constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}

