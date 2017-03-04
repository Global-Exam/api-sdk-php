<?php

namespace GlobalExam\Api\Sdk\Resource\Board;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

class BoardSection
{
    use Resource;

    const PARENT_RESOURCE_KEY = 'board-mode';

    const RESOURCE_KEY = 'board-section';

    /**
     * BoardSection constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
