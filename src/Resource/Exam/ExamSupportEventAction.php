<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamSupportEventAction
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamSupportEventAction
{
    use Resource;

    const RESOURCE_KEY = 'exam-support-event-action';

    /**
     * ExamSupportEventAction constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
