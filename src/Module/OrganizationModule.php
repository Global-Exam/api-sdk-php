<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Organization\Organization;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationBusinessType;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationGroup;
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
     * @return OrganizationType
     */
    public function organizationType()
    {
        return new OrganizationType($this);
    }
}
