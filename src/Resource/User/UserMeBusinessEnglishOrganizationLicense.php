<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserMeBusinessEnglishOrganizationLicense
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeBusinessEnglishOrganizationLicense
{
    use Resource;

    const RESOURCE_KEY = 'user/me/business-english/organization-license';

    /**
     * UserMeBusinessEnglishOrganizationLicense constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
