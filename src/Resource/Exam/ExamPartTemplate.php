<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class ExamPartTemplate
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamPartTemplate
{
    use Resource;

    const RESOURCE_KEY = 'exam-part-template';

    /**
     * ExamPartTemplate constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
