<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamSupportEvent
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamSupportEvent
{
    use Resource;

    const RESOURCE_KEY = 'exam-support-event';

    /**
     * ExamSupportEvent constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
