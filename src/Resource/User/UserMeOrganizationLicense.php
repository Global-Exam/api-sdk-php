<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserMeOrganizationLicense
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeOrganizationLicense
{
    use Resource;

    const RESOURCE_KEY = 'user/me/relationships/organization-license';

    /**
     * UserMeOrganizationLicense constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
