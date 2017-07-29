<?php

namespace GlobalExam\Api\Sdk\Resource\Organization;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class OrganizationIp
 *
 * @package GlobalExam\Api\Sdk\Resource\Organization
 */
class OrganizationIp
{
    use Resource;

    const RESOURCE_KEY = 'organization-ip';

    /**
     * OrganizationIp constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
