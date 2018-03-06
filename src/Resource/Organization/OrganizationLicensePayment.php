<?php

namespace GlobalExam\Api\Sdk\Resource\Organization;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class OrganizationLicensePayment
 *
 * @package GlobalExam\Api\Sdk\Resource\Organization
 */
class OrganizationLicensePayment
{
    use Resource;

    const RESOURCE_KEY = 'organization-license-payment';

    /**
     * OrganizationLicensePayment constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
