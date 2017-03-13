<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamSectionScore
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamSectionScore
{
    use Resource;

    const RESOURCE_KEY = 'exam-section-score';

    /**
     * ExamSectionScore constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}

