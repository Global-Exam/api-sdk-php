<?php

namespace GlobalExam\Api\Sdk\Resource\Organization;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class OrganizationSeatPricing
 *
 * @package GlobalExam\Api\Sdk\Resource\Organization
 */
class OrganizationSeatPricing
{
    use Resource;

    const RESOURCE_KEY = 'organization-seat-pricing';

    /**
     * OrganizationSeatPricing constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
