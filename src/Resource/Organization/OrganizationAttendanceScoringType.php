<?php

namespace GlobalExam\Api\Sdk\Resource\Organization;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class OrganizationAttendanceScoringType
 *
 * @package GlobalExam\Api\Sdk\Resource\Organization
 */
class OrganizationAttendanceScoringType
{
    use Resource;

    const RESOURCE_KEY = 'organization-attendance-scoring-type';

    /**
     * OrganizationAttendanceScoringType constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
