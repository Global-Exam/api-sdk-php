<?php

namespace GlobalExam\Api\Sdk\Resource\Media;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class MediaUsage
 *
 * @package GlobalExam\Api\Sdk\Resource\Media
 */
class MediaUsage
{
    use Resource;

    const RESOURCE_KEY = 'media-usage';

    /**
     * MediaUsage constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
