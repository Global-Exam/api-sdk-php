<?php

namespace GlobalExam\Api\Sdk\Resource\Board;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class BoardExamMockCecrlLevelScore
 *
 * @package GlobalExam\Api\Sdk\Resource\Board
 */
class BoardExamMockCecrlLevelScore
{
    use Resource;

    const RESOURCE_KEY = 'board-exam-mock-cecrl-level-score';

    /**
     * BoardExamMockCecrlLevelScore constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
