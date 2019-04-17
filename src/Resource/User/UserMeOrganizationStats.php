<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserMeOrganizationStats
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeOrganizationStats
{
    use Resource;

    const RESOURCE_KEY = 'user/me/relationships/organization';

    /**
     * UserMeOrganizationStats constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param int   $id
     * @param int   $userId
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     */
    public function getUserExport(int $id, int $userId, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/stats/' . User::RESOURCE_KEY . '/' . $userId . '/export', $body, $params);
    }

    /**
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     */
    public function getCorrectionsExport(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/stats/corrections/export', $body, $params);
    }
}
