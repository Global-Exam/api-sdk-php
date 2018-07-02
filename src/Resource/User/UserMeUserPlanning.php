<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserMeUserPlanning
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeUserPlanning
{
    use Resource;

    const RESOURCE_KEY = 'user/me/user-planning';

    /**
     * UserMeUserPlanning constructor.
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function search(array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/search', $body, $params);
    }

    /**
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function stats(array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/stats', [], $params);
    }
}
