<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamCecrlLevel
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamCecrlLevel
{
    use Resource;

    const RESOURCE_KEY = 'exam-cecrl-level';

    /**
     * ExamCecrlLevel constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
