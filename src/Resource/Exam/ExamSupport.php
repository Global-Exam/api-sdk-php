<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamSupport
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamSupport
{
    use Resource;

    const RESOURCE_KEY = 'exam-support';

    /**
     * ExamSupport constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
