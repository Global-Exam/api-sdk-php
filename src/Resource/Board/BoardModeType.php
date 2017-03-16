<?php

namespace GlobalExam\Api\Sdk\Resource\Board;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class BoardModeType
 *
 * @package GlobalExam\Api\Sdk\Resource\Board
 */
class BoardModeType
{
    use Resource;

    const RESOURCE_KEY = 'board-mode-type';

    /**
     * BoardModeType constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
