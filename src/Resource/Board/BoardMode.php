<?php

namespace GlobalExam\Api\Sdk\Resource\Board;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

class BoardMode
{
    use Resource;

    const PARENT_RESOURCE_KEY = 'board-level';

    const RESOURCE_KEY = 'board-mode';

    /**
     * BoardMode constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
