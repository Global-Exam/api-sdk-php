<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserMeUserPlan
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeUserPlan
{
    use Resource;

    const RESOURCE_KEY = 'user/me/user-plan';

    /**
     * UserMeStatsSkill constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function storeUserLicense(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . $id . '/' . UserLicense::RESOURCE_KEY, $body, $params);
    }
}
