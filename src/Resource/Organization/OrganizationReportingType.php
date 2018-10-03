<?php

namespace GlobalExam\Api\Sdk\Resource\Organization;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class OrganizationReportingType
 *
 * @package GlobalExam\Api\Sdk\Resource\Organization
 */
class OrganizationReportingType
{
    use Resource;

    const RESOURCE_KEY = 'organization-reporting-type';

    /**
     * OrganizationReportingType constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
