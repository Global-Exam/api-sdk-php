<?php

namespace GlobalExam\Api\Sdk\Resource\Language;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class Language
 *
 * @package GlobalExam\Api\Sdk\Resource\Language
 */
class Language
{
    use Resource;

    const RESOURCE_KEY = 'language';

    /**
     * Language constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
