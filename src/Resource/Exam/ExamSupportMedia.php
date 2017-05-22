<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamSupportMedia
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamSupportMedia
{
    use Resource;

    const RESOURCE_KEY = 'exam-support-media';

    /**
     * ExamSupportMedia constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
