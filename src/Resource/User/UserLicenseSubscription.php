<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserLicenseSubscription
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserLicenseSubscription
{
    use Resource;

    const RESOURCE_KEY = 'user-license-subscription';

    /**
     * UserLicenseSubscription constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function cancel($id, array $params = [])
    {
        return $this->api->send('PATCH', static::RESOURCE_KEY . '/' . $id . '/cancel', [], $params);
    }
}
