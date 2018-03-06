<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Organization\Organization;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationBusinessType;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationIp;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationLicensePayment;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationPartnerUser;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationSeatPricing;
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
     * @return OrganizationIp
     */
    public function organizationIp()
    {
        return new OrganizationIp($this);
    }

    /**
     * @return OrganizationLicensePayment
     */
    public function organizationLicensePayment()
    {
        return new OrganizationLicensePayment($this);
    }

    /**
     * @return OrganizationPartnerUser
     */
    public function organizationPartnerUser()
    {
        return new OrganizationPartnerUser($this);
    }

    /**
     * @return OrganizationSeatPricing
     */
    public function organizationSeatPricing()
    {
        return new OrganizationSeatPricing($this);
    }

    /**
     * @return OrganizationType
     */
    public function organizationType()
    {
        return new OrganizationType($this);
    }
}
