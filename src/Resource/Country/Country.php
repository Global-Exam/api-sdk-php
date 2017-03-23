<?php

namespace GlobalExam\Api\Sdk\Resource\Country;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class Country
 *
 * @package GlobalExam\Api\Sdk\Resource\Country
 */
class Country
{
    use Resource;

    const RESOURCE_KEY = 'country';

    /**
     * Country constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
