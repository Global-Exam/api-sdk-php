<?php

namespace GlobalExam\Api\Sdk\Resource\Media;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class MediaFormat
 *
 * @package GlobalExam\Api\Sdk\Resource\Coupon
 */
class MediaFormat
{
    use Resource;

    const RESOURCE_KEY = 'media-format';

    /**
     * MediaFormat constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
