<?php

namespace GlobalExam\Api\Sdk\Resource\Coupon;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Plan\Plan;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Coupon
 *
 * @package GlobalExam\Api\Sdk\Resource\Coupon
 */
class Coupon
{
    use Resource;

    const RESOURCE_KEY = 'coupon';

    /**
     * BoardMode constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function syncPlan($id, array $body = [])
    {
        return $this->api->send('PATCH', static::RESOURCE_KEY . '/' . $id . '/relationships/'. Plan::RESOURCE_KEY, $body);
    }
}
