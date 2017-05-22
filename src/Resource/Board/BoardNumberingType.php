<?php

namespace GlobalExam\Api\Sdk\Resource\Board;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class BoardNumberingType
 *
 * @package GlobalExam\Api\Sdk\Resource\Board
 */
class BoardNumberingType
{
    use Resource;

    const RESOURCE_KEY = 'board-numbering-type';

    /**
     * BoardNumberingType constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
