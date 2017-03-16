<?php
namespace GlobalExam\Api\Sdk\Resource\Plan;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class PlanType
 *
 * @package GlobalExam\Api\Sdk\Resource\Plan
 */
class PlanType
{
    use Resource;

    const RESOURCE_KEY = 'plan-type';

    /**
     * Organization constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
