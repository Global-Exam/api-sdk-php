<?php

namespace GlobalExam\Api\Sdk\Resource\Board;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class BoardType
 *
 * @package GlobalExam\Api\Sdk\Resource\Board
 */
class BoardType
{
    use Resource;

    const RESOURCE_KEY = 'board-type';

    /**
     * BoardType constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
