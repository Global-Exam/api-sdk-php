<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserMeStatsAdaptiveMode
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeStatsAdaptiveMode
{
    use Resource;

    const RESOURCE_KEY = 'user/me/stats/adaptive-mode';

    /**
     * UserMeStatsAdaptiveMode constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param array $body
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function getGlobal(array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/global', $body);
    }

    /**
     * @param int   $boardSessionId
     * @param array $params
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function getBoardSession(int $boardSessionId, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/board-session/' . $boardSessionId, [], $params);
    }
}
