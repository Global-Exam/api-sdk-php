<?php

namespace GlobalExam\Api\Sdk\Resource\Board;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class BoardSessionExamQuestionMedia
 *
 * @package GlobalExam\Api\Sdk\Resource\Board
 */
class BoardSessionExamQuestionMedia
{
    use Resource;

    const RESOURCE_KEY = 'board-session-exam-question-media';

    /**
     * BoardSessionExamQuestionMedia constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
