<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamDifficulty
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamDifficulty
{
    use Resource;

    const RESOURCE_KEY = 'exam-difficulty';

    /**
     * ExamDifficulty constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
