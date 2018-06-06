<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserMeStatsAssessmentMode
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeStatsAssessmentMode
{
    use Resource;

    const RESOURCE_KEY = 'user/me/stats/assessment-mode';

    /**
     * UserMeStatsAssessmentMode constructor.
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
}
