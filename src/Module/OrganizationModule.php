<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Organization\Organization;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationBusinessType;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationGroup;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationIp;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationLicense;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationStats;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationType;

/**
 * Class OrganizationModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait OrganizationModule
{
    /**
     * @return Organization
     */
    public function organization()
    {
        return new Organization($this);
    }

    /**
     * @return OrganizationBusinessType
     */
    public function organizationBusinessType()
    {
        return new OrganizationBusinessType($this);
    }

    /**
     * @return OrganizationGroup
     */
    public function organizationGroup()
    {
        return new OrganizationGroup($this);
    }

    /**
     * @return OrganizationIp
     */
    public function organizationIp()
    {
        return new OrganizationIp($this);
    }

    /**
     * @return OrganizationLicense
     */
    public function organizationLicense()
    {
        return new OrganizationLicense($this);
    }

    /**
     * @return OrganizationStats
     */
    public function organizationStats()
    {
        return new OrganizationStats($this);
    }

    /**
     * @return OrganizationType
     */
    public function organizationType()
    {
        return new OrganizationType($this);
    }
}
