<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamSectionType
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamSectionType
{
    use Resource;

    const RESOURCE_KEY = 'exam-section-type';

    /**
     * ExamSection constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
