<?php

namespace GlobalExam\Api\Sdk\Resource\Board;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class BoardTraining
 *
 * @package GlobalExam\Api\Sdk\Resource\Board
 */
class BoardTraining
{
    use Resource;

    const RESOURCE_KEY = 'board-training';

    /**
     * BoardTraining constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
