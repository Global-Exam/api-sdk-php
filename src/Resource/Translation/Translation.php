<?php

namespace GlobalExam\Api\Sdk\Resource\Translation;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class Translation
 *
 * @package GlobalExam\Api\Sdk\Resource\Translation
 */
class Translation
{
    use Resource;

    const RESOURCE_KEY = 'translation';

    /**
     * Translation constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
