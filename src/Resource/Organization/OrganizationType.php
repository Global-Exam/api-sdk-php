<?php

namespace GlobalExam\Api\Sdk\Resource\Organization;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class OrganizationType
 *
 * @package GlobalExam\Api\Sdk\Resource\Organization
 */
class OrganizationType
{
    use Resource;

    const RESOURCE_KEY = 'organization-type';

    /**
     * User constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
