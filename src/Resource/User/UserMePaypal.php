<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserMePaypal
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMePaypal
{
    use Resource;

    const RESOURCE_KEY = 'user/me/paypal';

    /**
     * UserMeAdaptive constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param array $body
     * @param array $params
     *
     * @return mixed
     * @throws \Exception
     */
    public function subscribe(array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/subscription', $body, $params);
    }
}
